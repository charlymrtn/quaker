<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasHasUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_has_usuario', function (Blueprint $table) {
            $table->increments('id_noticias_has_usuario');
            $table->unsignedInteger('noticias_id_noticias');
            $table->unsignedInteger('usuario_id_usuario');

            $table->foreign('usuario_id_usuario')->references('id_usuario')->on('users')->onDelete('cascade');
            $table->foreign('noticias_id_noticias')->references('id_noticias')->on('noticias')->onDelete('cascade');

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
        Schema::dropIfExists('noticias_has_usuario');
    }
}
