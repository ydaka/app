<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movimientos';
    protected $fillable = ['cod_usuario', 'cod_proovedor', 'cod_producto', 'cod_asesor_e', 'cod_local_e', 'fecha_entrada', 'imei', 'cod_asesor_s', 'cod_local_s', 'fecha_salida', 'observaciones'];
    protected $primaryKey = 'cod_movimiento';
}
