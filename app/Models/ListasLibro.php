<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListasLibro extends Model
{
    protected $table = 'listas_libros';
	protected $fillable = [
		'autor',
		'titulo',
		'editorial',
		'anio',
		'clasificacion',
	];
}
