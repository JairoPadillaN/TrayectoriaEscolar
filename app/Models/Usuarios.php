<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'matricula',
        'name',
        'apPaterno',
        'apMaterno',
        'email',
        'activo',
        'sede_id',
        'rol_id',
        'carrera_id',
    ];
    protected $guarded=[];

    public function sede()
    {
        return $this->belongsTo(Sedes::class,'id');
    }

    public function rol()
    {
        return $this->belongsTo(RolesUser::class,'id');
    }

    public function carrera()
    {
        return $this->belongsTo(Carreras::class,'id');
    }

}