<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use mysql_xdevapi\Exception;

class ProductsController extends Controller
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
        return view('admin.newProduct'); 
    }

    public function editOrder(Request $request){
        return view('admin.editProduct', ['request' => $request]); 
    }

    public function addProduct(Request $request)
    {
        $name = $request->input('Name');
        $price = $request->input('Price');
        $image = $request->input('Image');
        $description = $request->input('Description');

        DB::insert('insert into products (name, price, description, image, created_at) values (?, ?, ?, ?, ?)', [$name, $price, $description, $image, date('Y-m-d H:i:s')]);

        return redirect()->route('order.new');
    }

    public function editProduct(Request $request)
    {
        $id = $request->input('Id');
        $name = $request->input('Name');
        $price = $request->input('Price');
        $image = $request->input('Image');
        $description = $request->input('Description');
        DB::update('update products set name = ?, price = ?, image = ?, description = ? where id = ?', [$name, $price, $image, $description, $id]);

        return redirect()->route('index');
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->input('id');
        DB::delete('delete from products where id = ?', [$id]);
        return redirect()->route('index');
    }
    
}
