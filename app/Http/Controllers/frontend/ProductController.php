<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function product()
    {
        $allProduct=Product::all();
        $section_title = 'Products';
        return view('frontend.product',compact('allProduct','section_title'));
    }

    public function showProduct($id)
    {
        $singleProduct=Product::find($id);

        $relatedProduct=Product::where('category',$singleProduct->category)
                                    ->where('id','!=',$singleProduct->id)
                                    ->limit(4)
                                    ->get();


        return view('frontend.pages.singleProduct', compact('singleProduct','relatedProduct'));

      


    }

    public function showProductMen()
    {

        $allProduct=Product::where('category','2')->get();




        return view('frontend.pages.men',compact('allProduct'));


    }

    public function showProductWomen()
    {


        $allProduct=Product::where('category','1')->get();


        return view('frontend.pages.women',compact('allProduct'));



    }

    public function showProductKid()
    {


        $allProduct=Product::where('category','3')->get();


        return view('frontend.pages.kid',compact('allProduct'));

    }







}
