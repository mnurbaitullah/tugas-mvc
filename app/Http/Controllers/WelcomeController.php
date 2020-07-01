<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        $nama = $request -> fname;
        return view('welcome', compact('nama'));
    }
}
