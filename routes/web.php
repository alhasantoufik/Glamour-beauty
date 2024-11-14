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
use App\Http\Controllers\CartController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\frontend\PaymentController as FrontendPaymentController;
use App\Http\Controllers\frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SslCommerzPaymentController;

// Frontend(Website)
Route::get('/home',[FrontendHomeController::class,'home'])->name('home');


Route::post('/registration',[FrontendCustomerController::class,'registration'])->name('customer.registration');
Route::post('/Clogin',[FrontendCustomerController::class,'login'])->name('customer.login');

Route::get('/view-profile',[FrontendCustomerController::class,'customerProfile'])->name('customer.profile');
// Route::get('/edit-profile/{editID}',[FrontendCustomerController::class,'edit'])->name('edit.profile');


Route::get('/product',[FrontendProductController::class,'product'])->name('product');

Route::get('/show-product/{productID}',[FrontendProductController::class,'showProduct'])->name('show.product');

Route::get('/Show-category-product/{categoryID}',[FrontendCategoryController::class,'showCategoryProduct'])->name('category.product');

Route::get('/search',[FrontendProductController::class,'search'])->name('search');


// add to cart 
Route::get('/add-to-cart/{productId}',[OrderController::class, 'addToCart'])->name('add.to.cart');
Route::get('/view-cart',[OrderController::class, 'viewCart'])->name('view.cart');
Route::get('/clear-cart',[OrderController::class, 'clearCart'])->name('cart.clear');
Route::get('/cart/item/delete/{id}',[OrderController::class, 'cartItemDelete'])->name('cart.item.delete');
Route::post('/update-cart/{pid}',[OrderController::class,'updateCart'])->name('update.cart');


Route::group(['middleware'=>'customer_auth'],function (){

    Route::get('/checkout',[OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order',[OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/customer-logout',[FrontendCustomerController::class,'customerLogout'])->name('customer.logout');

    Route::get('/view-profile',[FrontendCustomerController::class,'viewProfile'])->name('view.profile');
    Route::get('/profile/edit',[FrontendCustomerController::class,'profileEdit'])->name('profile.edit');
    Route::post('/profile/update/{update_id}',[FrontendCustomerController::class,'profileUpdate'])->name('profile.update');


    Route::get('/view-invoice/{order_id}',[OrderController::class,'viewInvoice'])->name('view.invoice');
    Route::get('/order-cancel/{order_id}',[FrontendCustomerController::class,'cancelOrder'])->name('cancel.order');
    Route::get('/order-delete/{order_id}',[FrontendCustomerController::class,'deleteOrder'])->name('delete.order');

    Route::post('/success', [FrontendPaymentController::class, 'success']);

});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);


Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END








//Backend


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/do-login',[LoginController::class,'dologin'])->name('dologin');
Route::group(['middleware' => 'auth'],function()
{
    // logout route
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
 



    Route::get('/',[HomeController::class,'home'])->name('dashboard');
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard.Body');


    
    
    Route::get('/order-list',[OrderController::class,'order'])->name('order.list');
    Route::get('/payment-list',[PaymentController::class,'payment']);
    Route::get('/admin',[AdminController::class,'admin']);
    Route::get('/report',[OrderController::class,'report'])->name('admin.report');
    Route::get('/cart-list',[CartController::class,'cart']);
    Route::get('/review',[ReviewController::class,'review']);
    
    
    
    // category routes
    Route::get('/category-list',[CategoryController::class,'category'])->name('category.list');
    Route::get('/category-form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/categorey/delete/{category_id}',[CategoryController::class,'delete'])->name('category.delete');

    
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
    Route::post('/product/update/{prodID}',[ProductController::class, 'update'])->name('product.update');
    Route::post('/set-alert-stock',[ProductController::class,'setAlertStock'])->name('set.alert.stock');





    // order routes
    Route::get('/order-list',[OrderController::class,'order'])->name('order.list');
    // Route::get('/order-form',[OrderController::class,'form'])->name('order.form');
    // Route::post('/order-store',[OrderController::class,'store'])->name('order.store');
   
    
    





























    });



 