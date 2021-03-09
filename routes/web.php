<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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

Route::get('login',[LoginController::class, 'showLogin'])->name('login');
Route::post('inicio/login',[LoginController::class,'Login']) ->name('store.login');
Route::get('registrate', [RegistroController::class, 'showRegistro'])->name('registrate');
Route::post('guarda/registro', [RegistroController::class, 'storeRegistro'])->name('store.registro');

//Lista de Libros
Route::get('lista/libros', [LibrosController::class, 'showLibros'])->name('lista.libros');
Route::get('prestamo/libros', [LibrosController::class, 'showPrestamos'])->name('prestamo.libros');

//Alumnos
Route::get('info/alumno', [AlumnoController::class, 'showInfo'])->name('info.alumno');
Route::get('nuevo/alumno', [AdministradorController::class, 'storeAlumno'])->name('store.alumno');
Route::post('nuevo_alumno', [AdministradorController::class, 'createAlumno'])->name('create.alumno');


