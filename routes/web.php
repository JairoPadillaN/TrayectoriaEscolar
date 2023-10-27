<?php

use App\Http\Controllers\SedesController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\CarrerasController;
<<<<<<< Updated upstream
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SexosController;
=======
use App\Http\Controllers\EncuestaController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas para el modulo de Sedes */
Route::get('/sedes', [App\Http\Controllers\SedesController::class, 'index'])->name('sedes');
Route::resource('sedes', SedesController::class);
/* Rutas para el modulo de Géneros */
Route::get('/generos',[App\Http\Controllers\GenerosController::class, 'index'])->name('generos');
Route::resource('generos', GenerosController::class);
/* Rutas para el modulo de Categorias */
Route::get('/categorias',[App\Http\Controllers\CategoriasController::class, 'index'])->name('categorias');
Route::resource('categorias', CategoriasController::class);
/* Rutas para el modulo de Preguntas */
Route::get('/preguntas',[App\Http\Controllers\PreguntasController::class, 'index'])->name('preguntas');
Route::resource('preguntas', PreguntasController::class);
/* Rutas para el modulo de Carreras */
Route::get('/carreras',[App\Http\Controllers\CarrerasController::class, 'index'])->name('carreras');
Route::resource('carreras', CarrerasController::class);
<<<<<<< Updated upstream
/* Rutas para el modulo Lista de Usuarios */
Route::get('/usuarios',[App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
Route::resource('usuarios', UsuariosController::class);
/* Rutas para el modulo Lista de Roles */
Route::get('/roles',[App\Http\Controllers\RolesController::class, 'index'])->name('roles');
Route::resource('roles', RolesController::class);
/* Rutas para el modulo Lista de Sexos */
Route::get('/sexos',[App\Http\Controllers\SexosController::class, 'index'])->name('sexos');
Route::resource('sexos', SexosController::class);
=======
/* Rutas para el modulo de Encuesta Inicial */
Route::get('/encuesta',[App\Http\Controllers\EncuestaController::class, 'index'])->name('encuesta');
Route::resource('encuesta', EncuestaController::class);
>>>>>>> Stashed changes
