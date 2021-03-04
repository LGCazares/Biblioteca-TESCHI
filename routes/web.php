<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\RegistroController;
use App\Models\ListasLibro;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');


Route::get('registrate', [RegistroController::class, 'showRegistro'])->name('registrate');
Route::post('guarda/registro', [RegistroController::class, 'storeRegistro'])->name('store.registro');

//Lista de Libros
Route::get('lista/libros', [LibrosController::class, 'showLibros'])->name('lista.libros');


