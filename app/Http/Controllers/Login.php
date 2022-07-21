<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $dados = collect($request->validate([
            'user' => ['required', 'email'],
            'password' => ['required'],
            'remember' => ['nullable', 'in:on']
        ]));

        
    }
}
