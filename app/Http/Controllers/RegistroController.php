<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
        $arrayValidation['primer_apellido'] = 'required';
        $mensajes['primer_apellido.required'] = 'El apellido paterno  es obligatorio';
        $arrayValidation['segundo_apellido'] = 'required';
        $mensajes['segundo_apellido.required'] = 'El apellido materno  es obligatorio';
        $arrayValidation['curp'] = ['required','unique:users', 'size:18', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'];
        $mensajes['curp.required'] = 'La CURP debe especificarse';
        $mensajes['curp.size'] = 'La CURP debe tener 18 caracteres';
        $mensajes['curp.regex'] = 'La CURP debe tener Formato AABC801231MDFLRN09';
        $mensajes['curp.unique'] = 'La CURP  ya esta registrada';
        $arrayValidation['telefono'] = 'required|digits_between:8,10';
        $mensajes['telefono.required'] = 'El telefono  es obligatorio';
        $arrayValidation['celular'] = 'required|digits_between:8,10';
        $mensajes['celular.required'] = 'El celular  es obligatorio';
        $arrayValidation['email'] = 'required|email|string|max:100|unique:users';
        $mensajes['email.required'] = 'El correo  es obligatorio';
        $mensajes['email.unique'] = 'El correo  ya esta registrado';
        $arrayValidation['password'] = 'required|string|min:8|confirmed';
        $mensajes['password.required'] = 'La contraseña  es obligatoria';
        $mensajes['password.confirmed'] = 'Las contraseñas  no coinciden';

        $validation = request()->validate($arrayValidation, $mensajes);

    
        $nuevo_registro = User::create([
            'nombre' => $request->nombre,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'curp' => $request->curp,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'folio' => 'ABC-0123',
        ]);


        return redirect()->route('login')->with('status', 'Registro guardado exitosamente.');
    }
}
