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


        $arrayValidation = [];
        $mensajes = [];
        $arrayValidation['email'] = 'required';
        $mensajes['email.required'] = 'El correo es obligatorio';
         $arrayValidation['password'] = 'required|string|min:8|';
        $mensajes['password.required'] = 'La contraseña  es obligatoria';



        return redirect()->route('home')->with('status', 'hola.'); 
        
        $validation = request()->validate($arrayValidation, $mensajes);





    }
}
