<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CtlgAseguraSeeder::class);
        $this->call(CtlgHologramasSeeder::class);
        $this->call(CtlgMarcasSeeder::class);
        $this->call(CtlgModelosSeeder::class);
        $this->call(CtlgTipoCoberturaSeeder::class);
        $this->call(CtlgTipoPagoSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(InfraccionSeeder::class);
        $this->call(ServicioMantenimientoSeeder::class);
        $this->call(VerificacionSeeder::class);
        $this->call(PolizaSeguroSeeder::class);
        $this->call(CalidadAireSeeder::class);
        $this->call(UltimoPinUbicacionSeeder::class);
        $this->call(UbicacionParkimetroSeeder::class);
        $this->call(FotoSeeder::class);
        $this->call(HorariosSeeder::class);
        $this->call(CtlgHoyNoCirculaSeeder::class);
        $this->call(HoyNoCirculaSeeder::class);
    }
}
