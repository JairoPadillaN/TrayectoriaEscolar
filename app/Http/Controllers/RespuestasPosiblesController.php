<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\RespuestasPosibles;
use Illuminate\Http\Request;

class RespuestasPosiblesController extends Controller
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
        $respuestasPosibles = respuestasPosibles::with('pregunta')->paginate(15);
        $preguntas = Preguntas::all();
        return view('respuestasPosibles.index',compact('respuestasPosibles','preguntas'));
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
        $respuestasPosibles = new respuestasPosibles();
        $respuestasPosibles->respuesa = $request->input('respuesta');
        $respuestasPosibles->pregunta_id = $request->input('pregunta');
        $respuestasPosibles->save();
        return redirect()->back()->with('success', 'Respuesta guardada correctamente')->with('message', 'La respuesta ha sido creada Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(respuestasPosibles $respuestasPosibles)
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
        $respuestasPosibles = respuestasPosibles::find($id);
        $respuestasPosibles->respuesa = $request->input('respuesta');
        $respuestasPosibles->pregunta_id = $request->input('pregunta');
        $respuestasPosibles->update();
        return redirect()->back()->with('success', 'Pregunta editada correctamente')->with('message', 'La respuesta ha sido editada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $respuestasPosibles = respuestasPosibles::find ($id);
        $respuestasPosibles->delete ();
        return redirect()->back()->with('success', 'Pregunta Eliminada correctamente')->with('message', 'La respuesta ha sido eliminada Correctamente');
    }
}
