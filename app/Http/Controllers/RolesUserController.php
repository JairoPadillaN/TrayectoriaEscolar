<?php

namespace App\Http\Controllers;

use App\Models\RolesUser;
use Illuminate\Http\Request;

class RolesUserController extends Controller
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
        $roles = RolesUser::all();
        return view('rolesUser.index',compact('roles'));
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
        $roles = new RolesUser;
        $roles->Rol = $request->input('nombre');
        $roles->save();
        return redirect('/rolesUser')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(RolesUser $roles)
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
        $roles = RolesUser::find($id);
        $roles->Rol = $request->input('nombre');
        $roles->update();
        return redirect('/rolesUser')->with('warning','Actualización exitosa');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = RolesUser::find($id);
        $roles->delete();
        return redirect('/rolesUser')->with('danger', 'Eliminación Exitosa!');
    }
}
