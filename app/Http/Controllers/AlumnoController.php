<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function showInfo ()
    {

        return view('alumno.info_alumno');
    }
    
}
