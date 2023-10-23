<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $table = 'categoria_encuesta';
    protected $primarykey = 'id';
    protected $fillable = ['categoria','descripcion','activo'];
    protected $guarded=[];
}
