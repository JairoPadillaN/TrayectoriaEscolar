<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{
    use HasFactory;
    protected $table='sexo';
    protected $primarykey='id';
    protected $fillable=['sexo','activo'];
    protected $guarded=[];
}
