<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|alpha',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ],[
            'name.required' => 'The username field is required'
        ]);

        return $request;
    }
}
