<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function product()
    {
        $allItem = Product::with('categoryRel')->paginate(5);
        return view('backend.product',compact('allItem'));
    }

    public function form()
    {
        $allcategory = category::all();
        return view('backend.product-form',compact('allcategory'));


    }

    public function store(Request $request)
    {
            // dd($request->all());
        $validation = Validator::make($request->all(),[
            'product_name'=>'required',
            'product_des'=>'required',
            'product_price'=>'required',
            'product_quant'=>'required',
            'cat_name'=>'required',
            'product_image'=>'required|file'

        ]);
        if($validation->fails())
        {
           notify()->error($validation->getMessageBag());
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
            'category'=>$request->cat_name
            
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

        $product=Product::find($editID);
        $allCategory=Category::all();
        return view('backend.pages.product-edit',compact('allCategory','product'));


        notify()->success('Product Edited successfully.');

        return redirect()->back();

    }

    public function update(Request $request,$prodId)
    {
        // dd($request->all());

        //validation



        //query
        $product=Product::find($prodId);
        $product->update([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
        ]);
      
        notify()->success('Product updated successfully.');
        return redirect()->route('product.list');


    }

    public function setAlertStock(Request $request)
    {
        session()->put($request->alert_quantity);
        return redirect()->back();
    }

    













    
}
