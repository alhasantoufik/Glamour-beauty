<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function stock()
    { 
        $allItem=Stock::all();
        return view('backend.stock',compact('allItem'));
    }

    public function form()
    {
        return view('backend.stock-form');
    }

    public function store(Request $request)
    {
        Stock::create([
            'stockProductName'=>$request->stock_name,
            'stockProductQuantity'=>$request->stock_amount
        ]);
        return redirect()->route('stock.list');

    }



}

