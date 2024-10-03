<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoryProduct($categoryID)
    {
        
        $allProductShow=Product::where('category',$categoryID)->get();
        return view('frontend.pages.productShowCategory',compact('allProductShow'));
    }
}
