<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\RespuestasPosibles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class EncuestaController extends Controller
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
    $preguntas = Preguntas::with('categoria')->get();
    $categorias = Categorias::all();
    $respuestasPosibles = RespuestasPosibles::all();
    $respuestasFinales = Respuestas::all();

    $usuario_id = Auth::id();

    $contesto = Respuestas::where('usuario_id', $usuario_id)
    ->first();

    if($contesto){
        return view('encuesta.contestada')->with('success', 'Encuesta Contestada')->with('message', 'Muchas gracias por contestar la Encuesta Inicial');
    } else {
        return view('encuesta.index', compact('preguntas', 'categorias','respuestasPosibles','respuestasFinales'));
    }
}


//////////////Este es el chido
public function store(Request $request) {
    foreach($request->respuesta as $pregunta_id => $respuesta) {
        $respuesta_model = new Respuestas();
        $respuesta_model->respuesta = $respuesta;
        $respuesta_model->pregunta_id = $pregunta_id;
        /* $respuesta_model->respuesta_id = $respuesta; */
        $respuesta_model->usuario_id = Auth::user()->id;
        $respuesta_model->contestada = 1;
        $respuesta_model->save();
    }

    return redirect()->route('dashboard')->with('success', 'Respuesta guardada correctamente')->with('message', 'Muchas gracias por contestar la Encuesta Inicial');
}
/* public function store(Request $request) {
    foreach($request->respuesta as $pregunta_id => $respuesta ) {
        $respuesta_model = new Respuestas();
        $respuesta_model->respuesta = $respuesta;
        $respuesta_model->pregunta_id = $pregunta_id;
        $respuesta_model->usuario_id = Auth::user()->id;
        $respuesta_model->contestada = 1;
        $respuesta_model->save();
    }

    return redirect()->route('dashboard')->with('success', 'Respuesta guardada correctamente')->with('message', 'Muchas gracias por contestar la encuesta inicial de la Universidad Tecnológica del Valle de Toluca');
} */
} 