<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function category()
    {
        $allItem = category::paginate(4);

        return view('backend.category',compact('allItem'));
    }

    public function form()
    {
        return view('backend.category-form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // if($request->hasFile('cat_image'))
        // {
        //     $fileName = $request->file('cat_image');
        //     $fileGenerate = date('ymdhis').'.'.$fileName->getClientOriginalExtension();
        //     $fileName->storeAs('category',$fileGenerate);
        // }





        Category::create([
            'name'=>$request->cat_name,
            'details'=>$request->cat_details,
        
        ]);
        return redirect()->route('category.list');
    }





}
