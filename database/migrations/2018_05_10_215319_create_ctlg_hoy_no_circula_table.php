<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlgHoyNoCirculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctlg_hoy_no_circula', function (Blueprint $table) {
            $table->increments('id_ctlg_hoy_no_circula');
            $table->integer('terminacion_placa');
            $table->string('engomado');
            $table->string('dia_semana');
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
        Schema::dropIfExists('ctlg_hoy_no_circula');
    }
}
