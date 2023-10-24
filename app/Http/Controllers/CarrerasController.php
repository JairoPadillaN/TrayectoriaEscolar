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
    public function index()
    {
        $carreras = Carreras::with('sede')->get();
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
        $carreras->descripcion = $request->input('descripcion');
        $carreras->sede_id =  $request->input('sede');
        $carreras->save();
        return redirect()->back();
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
        $carreras->descripcion = $request->input('descripcion');
        $carreras->sede_id =  $request->input('sede');
        $carreras->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carreras = Carreras::find($id);
        $carreras->delete();
        return redirect()->back();
    }
}
