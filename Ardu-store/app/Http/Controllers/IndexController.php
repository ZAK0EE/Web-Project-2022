<?php

namespace App\Http\Controllers;

use App\Models\index;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function show(){
        return view('index',[
            'products'=> DB::table('products')->get()
        ]);
    }
}
