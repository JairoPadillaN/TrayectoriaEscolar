<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sedes;

class SedesController extends Controller
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
        $sedes = Sedes::all();
        return view('sedes.index',compact('sedes'));
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
        $sedes = new Sedes;
        $sedes->NombreSede = $request->input('nombre');
        $sedes->Direccion = $request->input('dirección');
        $sedes->save();  
        return redirect()->back()->with('success', 'Sede Academica creada correctamente')->with('message', 'La sede academica a sido creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sedes $sedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sedes=Sedes::find($id);
        $sedes->NombreSede = $request->input('nombre');
        $sedes->Direccion = $request->input('dirección');
        $sedes->update();  
        return redirect()->back()->with('success', 'Sede Academica editada correctamente')->with('message', 'La sede academica ha sido editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sedes=Sedes::find($id);
        $sedes->delete();
        return redirect()->back()->with('success', 'Sede Academica eliminada correctamente')->with('message', 'La sede academica a sido eliminada correctamente');
    }
}
