<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalidadAireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calidad_aire', function (Blueprint $table) {
            $table->increments('id_calidad_aire');
            $table->string('aqs');
            $table->unsignedInteger('usuario_id_usuario');

            $table->foreign('usuario_id_usuario')->references('id_usuario')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('calidad_aire');
    }
}
