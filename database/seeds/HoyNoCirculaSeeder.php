<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
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
            DB::table('hoy_no_circula')->insert([
                'ctlg_hologramas_id_ctlg_hologramas'=> rand(1, 5),
                'horario_id_horario'=> rand(1, 5),
                'ctlg_id_ctlg_hoy_no_circula'=> rand(1, 5),
                'vehiculo_id_vehiculo'=> rand(1, 5),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
