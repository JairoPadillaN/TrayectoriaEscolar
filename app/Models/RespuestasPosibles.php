<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestasPosibles extends Model
{
    use HasFactory;
    protected $table = 'respuestasPosibles';
    protected $primarykey = 'id';
    protected $fillable = ['respuesa','pregunta_id'];
    protected $guarded=[];

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class,'id');
    }
}
