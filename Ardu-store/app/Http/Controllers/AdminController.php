<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController
{
    public function adminHome()
    {
        $orders = DB::table('orders')->get();

        //if admin return view adminHome
        return view('admin.home', [
            'orders' => $orders
        ]);

    }
    public function orderVerfity($order_id)
    {
        DB::table('orders')
            ->where('id', $order_id)
            ->update(['status' => 'Verified']);
        return redirect()->route('admin.home');

    }
    public function orderCancel($order_id)
    {
        DB::table('orders')
            ->where('id', $order_id)
            ->update(['status' => 'Canceled']);
        return redirect()->route('admin.home');

    }


}
