<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    return view('layouts.login');
}

    public function authenticating (Request $request){
    // Validate user input
    $credentials = $request->validate([
        'name' => 'required',
        'password' => 'required'
    ]);

    // Attempt authentication
    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect()->intended('/home'); // Redirect to dashboard
    }

    // Authentication failed, return to login with error message
    return back()->withErrors(['username' => 'Username or password incorrect'])->withInput($request->only('username'));
    }
}

