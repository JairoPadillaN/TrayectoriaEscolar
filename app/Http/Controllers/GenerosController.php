<?php

namespace App\Http\Controllers;

use App\Models\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{

    /**
     * Create a new controller instance
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
        $generos = Generos::all();
        return view('generos.index',compact('generos'));
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
        $generos = new Generos;
        $generos->genero = $request->input('nombre');
        $generos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Generos $generos)
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
        $generos = Generos::find($id);
        $generos->genero = $request->input('nombre');
        /* $generos->activo = $request->input('activo'); */
        $generos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $generos = Generos::find($id);
        $generos->delete();
        return redirect()->back();
    }
}
