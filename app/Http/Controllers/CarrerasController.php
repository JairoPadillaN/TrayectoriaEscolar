<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use App\Models\Sedes;
use Illuminate\Http\Request;

class CarrerasController extends Controller
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
    public function index(Request $request)
    {
        $carreras = Carreras::with('sede')->paginate(5, ['*'], 'page', $request->input('page', 1));
        $sedes = Sedes::all();
        return view('carreras.index',compact('carreras','sedes'));
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
        $carreras = new Carreras();
        $carreras->carrera = $request->input('nombre');
        $carreras->acronimo = $request->input('acronimo');
        $carreras->descripcion = $request->input('descripcion');
        $carreras->sede_id =  $request->input('sede');
        $carreras->save();
        return redirect()->back()->with('success', 'Carrera creada correctamente')->with('message', 'La carrera nueva a sido creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carreras $carreras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($edit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carreras = Carreras::find($id);
        $carreras->carrera = $request->input('nombre');
        $carreras->acronimo = $request->input('acronimo');
        $carreras->descripcion = $request->input('descripcion');
        $carreras->sede_id =  $request->input('sede');
        $carreras->update();
        return redirect()->back()->with('success', 'Carrera editada correctamente')->with('message', 'La carrera a sido editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carreras = Carreras::find($id);
        $carreras->delete();
        return redirect()->back()->with('success', 'Carrera eliminada correctamente')->with('message', 'La carrera se ha eliminado correctamente');
    }
}
