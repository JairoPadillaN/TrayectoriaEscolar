<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuarioExtend;

class ModuloUsuarios extends Controller


{
    public function index () { 
        $data = UsuarioExtend::all();
        return view ('modulousuarios',['data' => $data]);

    }
}
