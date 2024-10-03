<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getAllProducts($id)
    {
        $product=Product::find($id);
        return response()->json($product);
    }

    public function createAllProducts(Request $request)
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
           return response()->json([
            'success'=>false,
            'data'=>$validation,
            'message'=>$validation->getMessageBag()
           ]);

        }
        $fileGenerate=null;
        if($request->hasFile('product_image'))
        {
            $fileName = $request->file('product_image');
            $fileGenerate = date('Ymdhis').'.'.$fileName->getClientOriginalExtension();
            $fileName->storeAs('category',$fileGenerate);
        }
        



        $product=Product::create([
            'name'=>$request->product_name,
            'description'=>$request->product_des,
            'price'=>$request->product_price,
            'image'=>$fileGenerate,
            'quantity'=>$request->product_quant,
            'category'=>$request->cat_name
            
        ]);
    
        return response()->json([
            'success'=>true,
            'data'=>$product,
            

        ]);
    }








}
