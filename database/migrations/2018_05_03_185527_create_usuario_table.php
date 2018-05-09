<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('usuario', function (Blueprint $table) {
			$table->increments('id_usuario');
			$table->string('nombre');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('url_imagen');
			$table->string('sesion');
			$table->unsignedInteger('noticias_id_noticias');

			$table->foreign('noticias_id_noticias')->references('id_noticias')->on('noticias');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('usuario');
	}
}
