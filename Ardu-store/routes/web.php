<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use \App\Http\Controllers\AdminController;



Route::get('/', [SearchController::class, 'show'])->name('index');
Route::get('/products/{product_id}', [ProductsController::class, 'show']);


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('is_admin')->prefix('admin')->group(function () {
    Route::get('home', [AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('order/verify/{order_id}', [AdminController::class, 'orderVerfity'])->name('order.verfity');
    Route::get('order/cancel/{order_id}', [AdminController::class, 'orderCancel'])->name('order.cancel');
    Route::get('product/new', [ProductsController::class, 'newOrder'])->name('order.new');
    Route::get('product/edit', [ProductsController::class, 'editOrder'])->name('order.edit');
    Route::get('productadd', [ProductsController::class, 'addProduct'])->name('product.add');
    Route::get('productedit', [ProductsController::class, 'editProduct'])->name('product.edit');
    Route::get('productdelete', [ProductsController::class, 'deleteProduct'])->name('product.delete');

});


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::group(['middleware' => ['auth']], function () {
    Route::get('checkout', [CheckoutController::class, 'getCheckout'])->name('checkout.index');
    Route::post('checkoutorder', [CheckoutController::class, 'placeOrder'])->name('checkout.place.order');
});
