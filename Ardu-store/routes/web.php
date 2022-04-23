<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use \App\Http\Controllers\AdminController;


Route::get('/', [SearchController::class, 'show'])->name('index');
Route::get('/products/{product_id}', [ProductsController::class, 'show']);

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('is_admin')->prefix('admin')->group(function () {
    Route::get('home', [AdminController::class, 'adminHome'])->name('admin.home');
//    Route::get('users', [AdminController::class, 'show_users'])->name('admin.users');
//    Route::get('orders', [AdminController::class, 'show_orders'])->name('admin.orders');

});


Route::get('/cart', function () {
//    return view('cart');
    abort(404);
});



