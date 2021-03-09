<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistro()
    {

        return view('registro.form_registro');
    }


    public function storeRegistro(Request $request)
    {

        $arrayValidation = [];
        $mensajes = [];
        $arrayValidation['nombre'] = 'required';
        $mensajes['nombre.required'] = 'El nombre es obligatorio';
        $arrayValidation['ap_paterno'] = 'required';
        $mensajes['ap_paterno.required'] = 'El apellido paterno  es obligatorio';
        $arrayValidation['ap_materno'] = 'required';
        $mensajes['ap_materno.required'] = 'El apellido materno  es obligatorio';
        $arrayValidation['curp'] = ['required', 'size:18', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'];
        $mensajes['curp.required'] = 'La CURP debe especificarse';
        $mensajes['curp.size'] = 'La CURP debe tener 18 caracteres';
        $mensajes['curp.regex'] = 'La CURP debe tener Formato AABC801231MDFLRN09';
        $arrayValidation['telefono'] = 'required|digits_between:8,10';
        $mensajes['telefono.required'] = 'El telefono  es obligatorio';
        $arrayValidation['celular'] = 'required|digits_between:8,10';
        $mensajes['celular.required'] = 'El celular  es obligatorio';
        $arrayValidation['correo'] = 'required|email|string|max:100|unique:users';
        $mensajes['correo.required'] = 'El correo  es obligatorio';
        $arrayValidation['contraseña'] = 'required|string|min:8|confirmed';
        $mensajes['contraseña.required'] = 'La contraseña  es obligatoria';



        $validation = request()->validate($arrayValidation, $mensajes);



        return $request;
    }
}
