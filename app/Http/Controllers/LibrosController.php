<?php

namespace App\Http\Controllers;

use App\Models\ListasLibro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function showLibros(){
        $libros = ListasLibro::all();
        return view('libros.lista_libros', compact('libros'));
    }

    public function showPrestamos ()
    {

        return view('libros.prestamo_libros');
    }
    
}

