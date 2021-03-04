<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{

    protected $table = 'direcciones';
    protected $fillable = [
        'calle',
        'num_exterior',
        'num_interior',
        'entre_calle',
        'y_calle',
        'estado',
        'municipio',
        'colonia',
        'cp',
        'referencia',
    ];
}
