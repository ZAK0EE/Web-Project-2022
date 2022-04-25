<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orders;


class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::create([
            'product_id'=>'1',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'processing',
        ]);
        Orders::create([
            'product_id'=>'2',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'processing',
        ]);
        Orders::create([
            'product_id'=>'3',
            'user_id'=>'2',
            'quantity'=>'1',
            'status'=>'processing',
        ]);
        Orders::create([
            'product_id'=>'3',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'processing',
        ]);
        Orders::create([
            'product_id'=>'5',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'processing',
        ]);
        Orders::create([
            'product_id'=>'1',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'canceled',
        ]);
        Orders::create([
            'product_id'=>'1',
            'user_id'=>'1',
            'quantity'=>'1',
            'status'=>'verified',
        ]);
        Orders::create([
            'product_id'=>'1',
            'user_id'=>'2',
            'quantity'=>'1',
            'status'=>'processing',
        ]);

    }
}
