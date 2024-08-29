<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        

        return view('backend.home');   
    }
    public function dashboard()
    {
        $customerCount=Customer::count();
        $totalSale=Order::sum('total_amount');
        return view('backend.dashboard',compact('customerCount','totalSale'));
    }
}
