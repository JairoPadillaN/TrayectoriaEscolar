<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    protected $table = 'genero';
    protected $primarykey = 'id';
    protected $fillable = ['genero','activo'];
    protected $guarded=[];
}
