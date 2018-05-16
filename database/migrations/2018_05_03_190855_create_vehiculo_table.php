<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('vehiculo', function (Blueprint $table) {
			$table->increments('id_vehiculo');
			$table->string('alias');
			$table->string('placas');
			$table->string('estado');
			$table->string('anio');
			$table->unsignedInteger('usuario_id_usuario');
			$table->unsignedInteger('ctlg_modelos_id_ctlg_modelos');
			$table->unsignedInteger('ctlg_hologramas_id_ctlg_hologramas');

			$table->foreign('usuario_id_usuario')->references('id_usuario')->on('users')->onDelete('cascade');
			$table->foreign('ctlg_modelos_id_ctlg_modelos')->references('id_ctlg_modelos')->on('ctlg_modelos')->onDelete('cascade');
			$table->foreign('ctlg_hologramas_id_ctlg_hologramas')->references('id_ctlg_hologramas')->on('ctlg_hologramas')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('vehiculo');
	}
}
