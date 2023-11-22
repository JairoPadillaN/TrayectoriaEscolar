<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Categorias;
use App\Models\RespuestasPosibles;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = Preguntas::with('categoria')->paginate(10);
        $categorias = Categorias::all();
        /* $respuestasPosibles = RespuestasPosibles::all(); */
       // $tipoInput = tipoInput::all();
    return view('preguntas.index', compact('preguntas','categorias',/* 'respuestasPosibles','tipoInput' */));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $preguntas = new Preguntas();
        $preguntas->pregunta = $request->input('pregunta');
       //$preguntas->tipoInput_id = $request->input('input');
        $preguntas->categoria_id = $request->input('categoria');
        $preguntas->tipoEntrada = $request->input('tipoEntrada');
        $preguntas->save();
        return redirect()->back()->with('success', 'Pregunta creada correctamente')->with('message', 'La pregunta ha sido creada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Preguntas $preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $preguntas = Preguntas::find($id);
        $preguntas->pregunta = $request->input('pregunta');
       // $preguntas->tipoInput_id = $request->input('input');
        $preguntas->categoria_id = $request->input('categoria');
        $preguntas->tipoEntrada = $request->input('tipoEntrada');
        $preguntas->update(); 
        return redirect()->back()->with('success', 'Pregunta modificada correctamente')->with('message', 'La pregunta ha sido modificada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $preguntas = Preguntas::find($id);
        $preguntas->delete();
        return redirect()->back()->with('success', 'Pregunta eliminada correctamente')->with('message', 'La pregunta ha sido eliminada Correctamente');
    }
}
