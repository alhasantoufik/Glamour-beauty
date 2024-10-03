<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
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
        $totalProduct=Product::count();
        $totalOrder=Order::count();
        return view('backend.dashboard',compact('customerCount','totalSale', 'totalProduct', 'totalOrder'));
    }
}
