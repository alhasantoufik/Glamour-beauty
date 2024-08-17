<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
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
        //     // 'image'=>'required',
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
        'name'=>$request->customer_name,
        'email'=>$request->customer_email,
        'password'=>bcrypt($request->customer_password),
        'address'=>$request->customer_address,
        'image'=>$request->filegenerate,
        'phone'=>$request->customer_number
       ]);

       notify()->success('Customer Registration Successful.');

       return redirect()->back();

       

    }

    public function login(Request $request)
    {
            //step 1 validation
            $validation=Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required|min:6',

            ]);

            if($validation->fails())
            {
                notify()->error($validation->getMessageBag());

                return redirect()->back();

            }


            //condition for login
            $credentials=$request->except('_token');
            $check=auth('customerGuard')->attempt($credentials);


            if($check){
                // notify()->success('Log in Succesfull');
                // return redirect()->route('');
                dd('login korsi');
            }else{
                notify()->error('log in Failed');
                return redirect()->route('home');
            }



    }

    

    public function customerLogout()
    {

        auth('customerGuard')->logout();
        session()->forget('home');

        notify()->success('Logout Successfull');
        return redirect()->route('home');


    }

    public function customerProfile()
    {
        return view('frontend.home');

    }


}
