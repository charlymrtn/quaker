<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoyNoCirculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoy_no_circula', function (Blueprint $table) {
            $table->increments('id_hoy_no_circula');
            $table->unsignedInteger('ctlg_hologramas_id_ctlg_hologramas');
            $table->unsignedInteger('horario_id_horario');
            $table->unsignedInteger('ctlg_id_ctlg_hoy_no_circula');
            $table->unsignedInteger('vehiculo_id_vehiculo');

            $table->foreign('ctlg_hologramas_id_ctlg_hologramas')->references('id_ctlg_hologramas')->on('ctlg_hologramas')->onDelete('cascade');
            $table->foreign('horario_id_horario')->references('id_horario')->on('horarios')->onDelete('cascade');
            $table->foreign('ctlg_id_ctlg_hoy_no_circula')->references('id_ctlg_hoy_no_circula')->on('ctlg_hoy_no_circula')->onDelete('cascade');
            $table->foreign('vehiculo_id_vehiculo')->references('id_vehiculo')->on('vehiculo')->onDelete('cascade');

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
        Schema::dropIfExists('hoy_no_circula');
    }
}
