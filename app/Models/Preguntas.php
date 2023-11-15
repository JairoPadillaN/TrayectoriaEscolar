<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $table = 'preguntas';
    protected $primarykey = 'id';
    protected $fillable = ['pregunta','activo','tipoInput_id','categoria_id'];
    protected $guarded=[];


    public function tipoInput()
    {
        return $this->belongsTo(tipoInput::class,'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class,'id');
    }
}
