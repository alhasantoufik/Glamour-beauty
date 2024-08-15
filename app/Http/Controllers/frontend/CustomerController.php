<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Customer;
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
}
