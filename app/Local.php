<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['direccion','telefono'];
    protected $primaryKey = 'cod_local';
}
