<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function profil(request $request)
    {
        return view('layouts.profil');
    }
}
