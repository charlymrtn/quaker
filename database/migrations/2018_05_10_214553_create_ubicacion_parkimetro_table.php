<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionParkimetroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_parkimetro', function (Blueprint $table) {
            $table->increments('id_ubicacion_parkimetro');
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
        Schema::dropIfExists('ubicacion_parkimetro');
    }
}
