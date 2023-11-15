<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\RolesUserController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\RespuestasPosiblesController;
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

Route::get('/dashboard', [DashboardController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware'=>['auth']], function(){
    /*Route::resource('roles',RolesController::class);
    Route::resource('users',UserController::class);
    Route::resource('products',ProductController::class);
*/
});

    /* Rutas para el modulo de Sedes */
    Route::get('/sedes', [App\Http\Controllers\SedesController::class, 'index'])->name('sedes');
    Route::resource('sedes', SedesController::class);
    /* Rutas para el modulo de Carreras */
    Route::get('/carreras',[App\Http\Controllers\CarrerasController::class, 'index'])->name('carreras');
    Route::resource('carreras', CarrerasController::class);
    /* Rutas para el modulo Lista de Roles */
    Route::get('/rolesUser',[App\Http\Controllers\RolesUserController::class, 'index'])->name('rolesUser');
    Route::resource('rolesUser', RolesUserController::class);
    /* Rutas para el modulo Lista de Usuarios */
    Route::get('/usuarios',[App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
    Route::resource('usuarios', UsuariosController::class);
    /* Rutas para el modulo de Categorias */
    Route::get('/categorias',[App\Http\Controllers\CategoriasController::class, 'index'])->name('categorias');
    Route::resource('categorias', CategoriasController::class);
    /* Rutas para el modulo de Preguntas */
    Route::get('/preguntas',[App\Http\Controllers\PreguntasController::class, 'index'])->name('preguntas');
    Route::resource('preguntas', PreguntasController::class);
    /* Rutas para el modulo de REspuestas Posibles */
    Route::get('/respuestasPosibles',[App\Http\Controllers\RespuestasPosiblesController::class, 'index'])->name('respuestasPosibles');
    Route::resource('respuestasPosibles', RespuestasPosiblesController::class);
    /*Tuta para importar usuarios */
    Route::post('/import-users', [UserController::class, 'importUsers'])->name('import-users');

require __DIR__.'/auth.php';
