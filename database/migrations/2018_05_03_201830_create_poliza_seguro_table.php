<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizaSeguroTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('poliza_seguro', function (Blueprint $table) {
			$table->increments('id_poliza_seguro');
			//$table->primary('numero_poliza');
			$table->string('numero_poliza');
			$table->date('fecha_emision');
			$table->date('fecha_pago');
			$table->unsignedInteger('vehiculo_id_vehiculo');
			$table->unsignedInteger('ctlg_tipo_cobertura_id_ctlg_tipo_cobertura');
			$table->unsignedInteger('ctlg_tipo_pago_id_ctlg_tipo_pago');
			$table->unsignedInteger('ctlg_asegura_id_ctlg_asegura');

			$table->foreign('vehiculo_id_vehiculo')->references('id_vehiculo')->on('vehiculo')->onDelete('cascade');
			$table->foreign('ctlg_tipo_cobertura_id_ctlg_tipo_cobertura')->references('id_ctlg_tipo_cobertura')->on('ctlg_tipo_cobertura')->onDelete('cascade');
			$table->foreign('ctlg_tipo_pago_id_ctlg_tipo_pago')->references('id_ctlg_tipo_pago')->on('ctlg_tipo_pago')->onDelete('cascade');
			$table->foreign('ctlg_asegura_id_ctlg_asegura')->references('id_ctlg_asegura')->on('ctlg_asegura')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('poliza_seguro');
	}
}
