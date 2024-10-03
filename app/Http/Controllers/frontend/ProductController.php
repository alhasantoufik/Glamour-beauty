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

    public function showCategoryProduct($id)
    {
        $allProduct=Product::where('category',$id)->get();
        return view('frontend.product',compact('category','allProduct'));
    }

    
    public function search()
    {
      // dd(request()->all());
      // dd($request->all());

      $products=Product::where('name','LIKE','%'.request()->search_key.'%')
                          // ->OrWhere('price','LIKE','%'.request()->search_key.'%')
                          ->get();

      //where('column name','condition','%value%')

      return view('frontend.pages.search',compact('products'));


    }





}
