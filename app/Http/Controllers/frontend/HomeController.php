<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $allProduct=Product::all();
        $section_title = 'Products';
        

        return view('frontend.home',compact('allProduct','section_title'));

    }








}

 