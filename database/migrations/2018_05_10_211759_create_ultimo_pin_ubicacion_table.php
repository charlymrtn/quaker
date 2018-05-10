<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltimoPinUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calidad_ultimo_pin_ubicacion', function (Blueprint $table) {
            $table->increments('id_ultimo_pin_ubicacion');
            $table->string('latitud');
            $table->string('longitud');
            $table->unsignedInteger('usuario_id_usuario');

            $table->foreign('usuario_id_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade');
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
        Schema::dropIfExists('calidad_ultimo_pin_ubicacion');
    }
}
