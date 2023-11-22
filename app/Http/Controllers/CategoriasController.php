<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
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
        $categorias = Categorias::all();
        return view('categorias.index',compact('categorias'));
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
        $categorias = new Categorias;
        $categorias->categoria = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        $categorias->save();
        return redirect()->back()->with('success', 'Categoria creada correctamente')->with('message', 'La categoria ha sido creada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categorias)
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
        $categorias = Categorias::find($id);
        $categorias->categoria = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        $categorias->update();
        return redirect()->back()->with('success', 'Categoria editada correctamente')->with('message', 'La categoria ha sido editada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias->delete();
        return redirect()->back()->with('success', 'Categoria eliminada correctamente')->with('message', 'La categoria ha sido eliminada Correctamente');
    }
}
