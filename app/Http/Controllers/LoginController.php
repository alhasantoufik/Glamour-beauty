<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login');
        
    }
    public function doLogin(Request $request)
    {

        // $credentials=$request->only(['email','password']);
        // $credentials=['email'=>$request->user_email,'password'=>$request->user_password];
        $credentials=$request->except("_token");

        $check=Auth::attempt($credentials);
        //dd($check);
        if($check)
        {
            notify()->success("login successful");
            return redirect()->route('dashboard.Body');

        }else{
            //2 number user
            return redirect()->back();
            notify()->error('log-in denied');
        }




    }

    public function logout()
    {
          Auth::logout();
          notify()->error("logout successful");

          return redirect()->route('login');
    }

}
