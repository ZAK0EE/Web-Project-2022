<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $search_key = request('search') ?? '';
    $search_data =
        DB::table('products')->where('name', 'like', '%' . $search_key . '%')
            ->orWhere('description', 'like', '%' . $search_key . '%')->get();

    if (is_null($search_key)) {
        return view('index', [
            'products' => $search_data
        ]);
    }
    //check if search parameter passed then specify the query

    return view('search', [
        'products' => $search_data
    ]);
});

Route::get('/cart', function () {
//    return view('cart');
    abort(404);
});

//authentication with profile page
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');


/*wildcards for products */

//for small projects it's effective
//Route::get('/products/{product_id}', function ($product_id) {
////    return $product_id;
//    //simple lookup database
//    $products=[
//        1=>'first product',
//        2=>'second product'
//    ];
//    if(! array_key_exists($product_id,$products)) abort(404,'Sorry this product Not Found');
//
//
//    return view('product',[
//        'product'=>$products[$product_id]
//    ]);
//});

//for large scall projects controllers effective
Route::get('/products/{product_id}', [ProductsController::class, 'show']);

