<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
class ProductsController
{
    public function show($product_id)
    {

        $id = (int) filter_var($product_id, FILTER_SANITIZE_NUMBER_INT); // remove this line if the product id equals the id

        $product = DB::select('select * from products where id = :id',  ['id' => $id]);

        if (is_null($product)) {
            abort(404, 'Sorry this product Not Found');
        }

        return view('product', [
            'product' => $product[0]
        ]);
    }
}
