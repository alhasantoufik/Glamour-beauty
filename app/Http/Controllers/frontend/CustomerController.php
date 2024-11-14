<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function registration(Request $request)
    {
        
        //step1 validation

        // $validation=Validator::make($request->all(),[
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'password'=>'required|min:6|confirmed',
        //     'address'=>'required',
        //     'image'=>'required',
        //     'phone'=>'required|min:11|max:11'
        //     // 'status'=>'required'

        // ]);

        // if($validation->fails())
        // {
        //     // dd($validation);
        //     notify()->error($validation->getMessageBag());
            
        //     return redirect()->back();
        // }
// check file exits
        $fileName=null;
        if($request->hasFile('image'))
        {

            
        $file=$request->file('image');
        //file name generate
        $fileName=date('Ymdhis')." . ".$file->getClientOriginalExtension();
        //file store where i want to
        $file->storeAs('customers',$fileName);



        }


       // query

       Customer::create([
        //bam pase column name=>dan pase value (form input)
        'first_name'=>$request->customer_fname,
        'last_name'=>$request->customer_lname,
        'email'=>$request->customer_email,
        'password'=>bcrypt($request->customer_password),
        'address'=>$request->customer_address,
        
        'phone'=>$request->customer_number
       ]);

       notify()->success('Customer Registration Successful.');

       return redirect()->back();

       

    }

    public function login(Request $request)
    {
       
            //step 1 validation
            $validation=Validator::make($request->all(),[
                'customer_email'=>'required|email',
                'customer_password'=>'required|min:6',

            ]);

            if($validation->fails())
            {

                // dd($validation->getMessageBag());
                notify()->error($validation->getMessageBag());

                return redirect()->back();

            }


            //condition for login
            $credentials['email']=$request->customer_email;
            $credentials['password']=$request->customer_password;
           

            $check=auth('customerGuard')->attempt($credentials);
            


            if($check){
                notify()->success('Log in Succesfull');
                return redirect()->route('home');
                //dd('login korsi');
            }else{
                notify()->error('log in Failed');
                return redirect()->route('home');
            }



    }

    

    public function customerLogout()
    {

        auth('customerGuard')->logout();
        

        notify()->success('Logout Successfull');
        return redirect()->route('home');


    }

    public function customerProfile()
    {
        return view('frontend.home');

    }

    public function viewProfile()
    {
        $allCustomer=Customer::all(); 
        $orders=Order::where('customer_id',auth('customerGuard')->user()->id)->get();
        
        return view('frontend.pages.profile',compact('orders','allCustomer'));
    }

    // public function edit($editID)
    // {
    //         $customer=Customer::find($editID);
    //         return view('frontend.pages.customerEdit',compact('customer'));
    // }

    public function cancelOrder($id)
    {
       
        $order=Order::find($id);
        
        $order->update([
            'status'=>'cancel'
        ]);

        $items=OrderDetail::where('order_id',$id)->get();
       foreach($items as $item)
       {
        $product=Product::find($item->product_id);

        $product->increment('quantity',$item->product_quantity);
       }



        notify()->success('Order cancelled.');
        return redirect()->back();

    }

    public function deleteOrder($id){
        $item = Order::find($id)->delete();
        notify()->success('Order Deleted');

        return redirect()->back();
    }

    //EDit PRofile
    public function profileEdit()
    {
        

        $allCustomer=Customer::find(auth('customerGuard')->user()->id);
        return view('frontend.pages.customerEdit',compact('allCustomer'));
    }

    public function profileUpdate(Request $request, $update_id)
    {
            $customer=Customer::find($update_id);

            $fileGenerate=null;
            if($request->hasFile('customer_image'))
            {

                $fileName=$request->file('customer_image');
                $fileGenerate =  date('ymdish').'.'.$fileName->getClientOriginalExtension();
                $fileName->storeAs('customer',$fileGenerate);

            }


            $customer->update([
                'name'=>$request->customer_name,
                'address'=>$request->customer_address,
                'phone'=>$request->customer_number,
                'image'=>$fileName
            ]);

            notify()->success('Profile Update Successfully');
            return redirect()->route('view.profile');
    }


}
