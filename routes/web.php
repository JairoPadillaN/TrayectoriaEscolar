<?php

use App\Http\Controllers\SedesController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\CarrerasController;
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