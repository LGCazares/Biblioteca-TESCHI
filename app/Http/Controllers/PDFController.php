<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function imprimirpdf (){
        $pdf = \PDF::loadView('credencial');
        return $pdf->stream('primerpdf.pdf');
    }
}
