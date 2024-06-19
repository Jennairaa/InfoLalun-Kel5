<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function buku(request $request)
    {
        return view('layouts.buku');
    }
}
