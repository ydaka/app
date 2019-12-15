<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('cod_movimiento');
            $table->integer('cod_usuario');
            $table->integer('cod_proovedor');
            $table->integer('cod_producto');
            $table->integer('cod_asesor_e');
            $table->integer('cod_local_e');
            $table->timestamp('fecha_entrada');
            $table->string('imei');
            $table->integer('cod_asesor_s');
            $table->integer('cod_local_s');
            $table->timestamp('fecha_salida');
            $table->string('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
