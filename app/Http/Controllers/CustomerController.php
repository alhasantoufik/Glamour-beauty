<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $customers=Customer::paginate(10);
        return view('backend.customer',compact('customers'));
    }
}
