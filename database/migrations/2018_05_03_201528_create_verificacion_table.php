<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificacionTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('verificacion', function (Blueprint $table) {
			$table->increments('id_verificacion');
			$table->time('fecha_verificacion');
			$table->integer('cantidad');
			$table->unsignedInteger('vehiculo_id_vehiculo');

			$table->foreign('vehiculo_id_vehiculo')->references('id_vehiculo')->on('vehiculo')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('verificacion');
	}
}
