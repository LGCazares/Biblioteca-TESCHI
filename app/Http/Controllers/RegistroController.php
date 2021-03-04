<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistro(){

        return view('registro.form_registro');
    }


    public function storeRegistro(Request $request){

        return $request;
    }
}
