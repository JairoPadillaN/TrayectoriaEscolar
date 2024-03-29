<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sedes extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='sedes';
    protected $primarykey='id';
    protected $fillable=['NombreSede','Dirección'];
    protected $guarded=[];
}
