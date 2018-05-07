<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioMantenimientoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('servicio_mantenimiento', function (Blueprint $table) {
			$table->increments('id_servicio_mantenimiento');
			$table->time('fecha_servicio');
			$table->string('motivo');
			$table->integer('monto_servicio');

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
		Schema::dropIfExists('servicio_mantenimiento');
	}
}
