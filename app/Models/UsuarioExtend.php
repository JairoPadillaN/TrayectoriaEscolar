<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioExtend extends Model
{
    use HasFactory;
    protected $table = 'usuarios_extends';
    protected $fillable = [
        'matricula',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'sexo',
        'foto',
        'user_id',
        'sede_id',
        'rol_id',
        'carrera_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
