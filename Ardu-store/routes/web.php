<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;


Route::get('/', [SearchController::class, 'show']);
//authentication with profile page
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/cart', function () {
//    return view('cart');
    abort(404);
});


Route::get('/products/{product_id}', [ProductsController::class, 'show']);

