<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_x_usuario extends Model
{
    protected $fillable = ['cod_usuario','cod_rol'];
    protected $primaryKey = 'rol_por_usuario';
}
