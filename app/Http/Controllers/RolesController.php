<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
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
        $roles = Roles::all();
        return view('roles.index',compact('roles'));
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
        $roles = new Roles;
        $roles->Rol = $request->input('nombre');
        $roles->save();
        return redirect('/roles')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
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
        $roles = Roles::find($id);
        $roles->Rol = $request->input('nombre');
        $roles->update();
        return redirect('/roles')->with('warning','Actualización exitosa');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = Roles::find($id);
        $roles->delete();
        return redirect('/roles')->with('danger', 'Eliminación Exitosa!');
    }
}
