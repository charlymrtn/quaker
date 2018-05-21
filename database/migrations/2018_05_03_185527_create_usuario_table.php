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
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id_usuario');
			$table->string('nombre');
			$table->string('email')->unique();
			$table->string('password');
			$table->boolean('status');
			$table->string('api_token', 60)->unique();
            $table->rememberToken();
			$table->string('url_imagen');
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
