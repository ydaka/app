<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'asesores';
    protected $fillable = ['cedula', 'nombres', 'apellidos', 'direccion', 'telefono', 'email'];
    protected $primaryKey = 'cod_asesor';
}
