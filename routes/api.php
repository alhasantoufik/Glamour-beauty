<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-all-product/{id}',[ProductController::class,'getAllProducts']);
Route::post('/create-product',[ProductController::class,'createAllProducts']);
