<?php



use App\Http\Controllers\StockController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\CustomerController as FrontendCustomerController;

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LoginController;


// frontend UI
Route::get('/home',[FrontendHomeController::class,'home'])->name('home');


Route::post('/registration',[FrontendCustomerController::class,'registration'])->name('customer.registration');




















Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/do-login',[LoginController::class,'dologin'])->name('dologin');
Route::group(['middleware' => 'auth'],function()
{
    // logout route
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
 



    Route::get('/',[HomeController::class,'home'])->name('dashboard');


    
    
    Route::get('/order-list',[OrderController::class,'order']);
    Route::get('/payment-list',[PaymentController::class,'payment']);
    Route::get('/admin',[AdminController::class,'admin']);
    Route::get('/report',[ReportController::class,'report']);
    Route::get('/cart-list',[CartController::class,'cart']);
    Route::get('/review',[ReviewController::class,'review']);
    
    
    
    // category routes
    Route::get('/category-list',[CategoryController::class,'category'])->name('category.list');
    Route::get('/category-form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
    
    // stock routes
    Route::get('/stock-list',[StockController::class,'stock'])->name('stock.list');
    Route::get('/stock-form',[StockController::class,'form'])->name('stock.form');
    Route::post('/stock-store',[StockController::class,'store'])->name('stock.store');

    // customer routes
    Route::get('/customer-list',[CustomerController::class,'customer'])->name('customer.list');
    Route::get('/customer-form',[CustomerController::class,'form'])->name('customer.form');
    Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
    

    // product routes
    Route::get('/product-list',[ProductController::class,'product'])->name('product.list');
    Route::get('/product-form',[ProductController::class,'form'])->name('product.form');
    Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
    // edit delete
    Route::get('/product/edit/{edit_id}',[ProductController::class,'edit'])->name('product.edit');
    Route::get('/product/delete/{delete_id}',[ProductController::class,'delete'])->name('product.delete');





    // order routes
    Route::get('/order-list',[OrderController::class,'order'])->name('order.list');
    // Route::get('/order-form',[OrderController::class,'form'])->name('order.form');
    // Route::post('/order-store',[OrderController::class,'store'])->name('order.store');
    
    





























    });



 