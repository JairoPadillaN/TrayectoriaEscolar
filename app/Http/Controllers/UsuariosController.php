<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use App\Models\RolesUser;
use App\Models\Sedes;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
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
/*     public function index(Request $request)
    {
        $usuarios = Usuarios::with('sede','rol','carrera')->paginate(5, ['*'], 'page', $request->input('page', 1));
        $sedes = Sedes::all();
        $roles = RolesUser::all();
        $carreras = Carreras::all();     
        return view('usuarios.index',compact(['usuarios','sedes','roles','carreras']));
    } */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $usuarios = Usuarios::with('sede','rol','carrera')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('matricula', 'like', '%' . $search . '%');
            })
            ->paginate(15, ['*'], 'page', $request->input('page', 1));
        $sedes = Sedes::all();
        $roles = RolesUser::all();
        $carreras = Carreras::all();     
        return view('usuarios.index',compact(['usuarios','sedes','roles','carreras']));
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
        $usuarios = new Usuarios();
        $usuarios->matricula = $request->input('matricula');
        $usuarios->name = $request->input('nombre');
        $usuarios->apPaterno = $request->input('apPat');
        $usuarios->apMaterno = $request->input('apMat');
        $usuarios->sede_id = $request->input('sede');
        $usuarios->rol_id = $request->input('rol');
        $usuarios->carrera_id = $request->input('carrera');
        $usuarios->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->rol_id = $request->input('rol');
        $usuarios->update();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->matricula = $request->input('matricula');
        $usuarios->name = $request->input('nombre');
        $usuarios->apPaterno = $request->input('apPat');
        $usuarios->apMaterno = $request->input('apMat');
        $usuarios->sede_id = $request->input('sede');
        $usuarios->carrera_id = $request->input('carrera');

        $usuarios->update();
        return view('usuarios.PerfilUsuario',compact(['usuarios','sedes','roles','carreras']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
        return redirect()->back();
    }
}
