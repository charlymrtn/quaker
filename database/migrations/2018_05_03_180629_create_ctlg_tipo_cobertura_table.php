<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtlgTipoCoberturaTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ctlg_tipo_cobertura', function (Blueprint $table) {
			$table->increments('id_ctlg_tipo_cobertura');
			$table->string('descripcion_tipo_coberturacol');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ctlg_tipo_cobertura');
	}
}
