<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller

{
    public function storeAlumno(){
        return view('registro.form_registro');
    }

    public function direccionAlumno(){
        return view('registro.form_direccion');
    }
}
