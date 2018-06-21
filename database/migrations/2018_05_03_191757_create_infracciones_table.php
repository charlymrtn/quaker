<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraccionesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('infracciones', function (Blueprint $table) {
			$table->increments('id_infraccion');
			$table->string('folio');
			//$table->primary('folio');
			$table->date('fecha');
			$table->text('descripcion');
			$table->string('situacion');
			$table->string('fundamento');
			$table->string('sancion');
			$table->string('motivo_infraccion');
			$table->tinyInteger('pagada');
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
		Schema::dropIfExists('infracciones');
	}
}
