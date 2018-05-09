<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\PolizaSeguro;

class PolizaSeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($x = 1; $x < 11; $x++) {
            DB::table('poliza_seguro')->insert([
                'numero_poliza' => $faker->md5,
                'fecha_emision'=>$faker->date(),
                'fecha_pago'=>$faker->date(),
                'vehiculo_id_vehiculo'=> rand(1, 10),
                'ctlg_tipo_cobertura_id_ctlg_tipo_cobertura'=> rand(1, 10),
                'ctlg_tipo_pago_id_ctlg_tipo_pago'=> rand(1, 10),                
                'ctlg_asegura_id_ctlg_asegura'=> rand(1, 10),               
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
