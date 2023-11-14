<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Preguntas;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $preguntas = Preguntas::with('categoria')->get();
    $categorias = Categorias::all();
    return view('encuesta.index', compact('preguntas', 'categorias'));
}

public function showTabs()
{
    $categorias = Categorias::all();
    return view('encuesta.tabs', compact('categorias'));
}

}