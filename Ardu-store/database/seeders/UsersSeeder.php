<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' =>  bcrypt('admin'),
            'is_admin' => '1'
        ]);
        User::create([
            'name'=>'user',
            'email'=>'user@user',
            'password'=> bcrypt('user'),
            'is_admin'=>'0',
        ]);

    }
}
//php artisan db:seed --class=UsersSeeder

