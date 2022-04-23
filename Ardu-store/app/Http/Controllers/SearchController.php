<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;

class SearchController
{
    public function show()
    {
        return view('index', [
            'products' => DB::table('products')->where('name', 'like', '%' .(request('search') ?? ''). '%')
                ->orWhere('description', 'like', '%' .(request('search') ?? '').'%')->get()
        ]);

    }
}
