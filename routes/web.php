<?php

use App\Http\Controllers\SedesController;
use App\Http\Controllers\GenerosController;
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
