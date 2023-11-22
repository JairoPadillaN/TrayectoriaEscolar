<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table = 'respuestasfinales';
    protected $primarykey = 'id';
    protected $fillable = ['respuesta','pregunta_id','respuesta_id','user_id','contestada'];
    protected $guarded=[];

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class,'id');
    }

    public function respuestasPosibles()
    {
        return $this->belongsTo(RespuestasPosibles::class,'pregunta_id');
    }

}
