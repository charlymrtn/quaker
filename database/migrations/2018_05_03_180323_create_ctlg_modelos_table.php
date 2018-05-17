<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtlgModelosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ctlg_modelos', function (Blueprint $table) {
			$table->increments('id_ctlg_modelos');
			$table->string('modelo');
			
			$table->unsignedInteger('ctlg_marcas_id_ctlg_marcas');
			$table->foreign('ctlg_marcas_id_ctlg_marcas')->references('id_ctlg_marcas')->on('ctlg_marcas')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ctlg_modelos');
	}
}
