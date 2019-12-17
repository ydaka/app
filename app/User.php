<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['cedula', 'nombres', 'apellidos', 'direccion', 'telefono', 'email', 'password'];
    //protected $fillable = ['cedula', 'nombres', 'apellidos', 'direccion', 'telefono', 'email','password','rol_por_usuario'];
    protected $primaryKey = 'cod_usuario';
    protected $hidden = ['password', 'remember_token'];
    //protected $casts = ['email_verified_at' => 'datetime'];
}

