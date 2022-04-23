<?php

namespace App\Http\Controllers;

class AdminController
{
    public function adminHome()
    {
        //if admin return view adminHome
        return view('admin.home');
    }
}
