<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matricula',
        'name',
        'apPaterno',
        'apMaterno',
        'email',
        'password',
        'activo',
        'sede_id',
        'rol_id',
        'carrera_id',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

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
