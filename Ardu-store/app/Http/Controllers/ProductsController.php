<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class ProductsController
{
    public function show($product_id)
    {

        $id = (int) filter_var($product_id, FILTER_SANITIZE_NUMBER_INT); // remove this line if the product id equals the id

        $product = DB::select('select * from products where id = :id',  ['id' => $id]);

        if (is_null($product)) {
            abort(404, 'Sorry this product Not Found');
        }

        if (auth()->check() && auth()->user()->is_admin == 1) {
            return view('admin.product', [
                'product' => $product[0]
                ]);
        }else{
            return view('product', [
                'product' => $product[0]
            ]);
        }
    }
    public function newOrder(){
        return view('admin.newProduct'); //edit the view `admin/newProduct` make it have a form to create new product
    }
}
