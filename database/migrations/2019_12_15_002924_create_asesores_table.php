<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores', function (Blueprint $table) {
            $table->bigIncrements('cod_asesor');
            $table->string('cedula')->unique();
            $table->text('nombres');
            $table->text('apellidos');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
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
        Schema::dropIfExists('asesores');
    }
}
