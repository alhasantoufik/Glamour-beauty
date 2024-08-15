<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function product()
    {
        $allItem = Product::paginate(5);
        return view('backend.product',compact('allItem'));
    }

    public function form()
    {
        return view('backend.product-form');


    }

    public function store(Request $request)
    {

        $validation = Validator::make($request->all(),[
            'product_name'=>'required',
            'product_des'=>'required',
            'product_price'=>'required',
            'product_quant'=>'required',
            'product_cat'=>'required',
            'product_image'=>'required|file|max:1024'

        ]);
        if($validation->fails())
        {
           // notify()->error($validation->getMessageBag());
           return redirect()->back();

        }
        $fileGenerate=null;
        if($request->hasFile('product_image'))
        {
            $fileName = $request->file('product_image');
            $fileGenerate = date('Ymdhis').'.'.$fileName->getClientOriginalExtension();
            $fileName->storeAs('category',$fileGenerate);
        }
        






        Product::create([
            'name'=>$request->product_name,
            'description'=>$request->product_des,
            'price'=>$request->product_price,
            'image'=>$fileGenerate,
            'quantity'=>$request->product_quant,
            'category'=>$request->product_cat
            
        ]);
    
        return redirect()->route('product.list');

    }


    // edit delete

    public function delete($deleteID)
    {
        $product= Product::find($deleteID)->delete();
       

        notify()->success('Product Deleted successfully.');

        return redirect()->back();
    }

    public function edit($editID)
    {
        $product= Product::find($editID)->edit();

        notify()->success('Product Edited successfully.');

        return redirect()->back();

    }















    
}
