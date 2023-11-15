<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Categorias;
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
       // $tipoInput = tipoInput::all();
    return view('preguntas.index', compact('preguntas','categorias',/*'tipoInput'*/));
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
        $preguntas->save();
        return redirect()->back();
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
        $preguntas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $preguntas = Preguntas::find($id);
        $preguntas->delete();
        return redirect()->back();
    }
}
