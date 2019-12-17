<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['cedula', 'nombres', 'apellidos', 'direccion', 'telefono', 'email','contraseña','rol_por_usuario'];
    protected $primaryKey = 'cod_usuario';
    protected $hidden = ['contraseña', 'remember_token'];
    //protected $casts = ['email_verified_at' => 'datetime'];
}

