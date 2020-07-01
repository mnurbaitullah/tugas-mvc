<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    // public function welcome(Request $nama)
    // {
    //     return view('welcome');
    // }
}
