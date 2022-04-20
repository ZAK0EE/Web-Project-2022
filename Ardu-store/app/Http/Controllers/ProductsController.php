<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

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

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');

        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }
}
