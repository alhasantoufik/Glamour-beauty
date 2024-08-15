<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $allCategory=category::all();
        $section_title = 'Categories';
        return view('frontend.master',compact('allCategory','section_title'));

    }








}

 