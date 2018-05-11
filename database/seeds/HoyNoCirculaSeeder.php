<?php

use Illuminate\Database\Seeder;
use App\HoyNoCircula;

class HoyNoCirculaSeeder extends Seeder
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
            DB::table('calidad_aire')->insert([
                'ctlg_hologramas_id_ctlg_hologramas'=> rand(1, 10),
                'horario_id_horario'=> rand(1, 10),
                'ctlg_id_ctlg_hoy_no_circula'=> rand(1, 10),
                'vehiculo_id_vehiculo'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
