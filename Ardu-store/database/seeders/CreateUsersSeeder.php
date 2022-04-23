<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'admin',
                'email'=>'admin@admin',
                'is_admin'=>'1',
                'password'=> bcrypt('admin'),
            ],
            [
                'name'=>'user',
                'email'=>'user@user',
                'is_admin'=>'0',
                'password'=> bcrypt('user'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
//php artisan db:seed --class=CreateUsersSeeder
