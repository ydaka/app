<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['cedula', 'nombres', 'apellidos', 'direccion', 'telefono', 'email'];
    protected $primaryKey = 'cod_proveedor';}
