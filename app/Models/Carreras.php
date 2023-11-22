<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $primarykey = 'id';
    protected $fillable = ['carrera','acronimo','descripcion','sede_id'];
    protected $guarded=[];

    public function sede()
    {
        return $this->belongsTo(Sedes::class,'id');
    }
}
