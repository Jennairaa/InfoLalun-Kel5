<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
class contentController extends Controller
{
    public function content(request $request)
    {
        return view('layouts.content');
    }
}
