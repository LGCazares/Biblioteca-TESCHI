<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function showLogin()
    {

        return view('auth.login');
    }

    public function Login(Request $request)
    {
        return $request;

        $this->validate(request(), [
            'email' =>'email|required|string',
            'password' => 'required|string'
        ]);
    }
}
