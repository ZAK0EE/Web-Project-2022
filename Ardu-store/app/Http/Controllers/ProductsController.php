<?php

namespace App\Http\Controllers;

class ProductsController
{
    public function show($product_id)
    {
        //    return $product_id;
        //simple lookup database
        $products = [
            1 => 'first product',
            2 => 'second product'
        ];
        if (!array_key_exists($product_id, $products)) abort(404, 'Sorry this product Not Found');

        return view('product', [
            'product' => $products[$product_id]
        ]);
    }
}
