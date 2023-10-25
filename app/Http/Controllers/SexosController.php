<?php

namespace App\Http\Controllers;

use App\Models\Sexos;
use Illuminate\Http\Request;

class SexosController extends Controller
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
        $sexos = Sexos::all();
        return view('sexos.index', compact('sexos'));
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
        $sexos = new Sexos;
        $sexos->sexo = $request->input('nombre');
        $sexos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Sexos $sexos)
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
        $sexos = Sexos::find($id);
        $sexos->sexo = $request->input('nombre');
        $sexos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sexos = Sexos::find($id);
        $sexos->delete();
        return redirect()->back();
    }
}
