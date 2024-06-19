<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(request $request)
    {
        return view('layouts.Home');
    }
}

