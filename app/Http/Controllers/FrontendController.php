<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Normal Controller
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        // return "hello dear " . 12;
        return view('about');
    }
}
