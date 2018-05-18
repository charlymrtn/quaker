<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Vehiculo;

class VehiculoSeeder extends Seeder
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
            DB::table('vehiculo')->insert([
                'alias'=>$faker->text(8),
                'placas'=>$faker->sentence(6),
                'estado'=>$faker->name,
                'anio'=>rand(1970,2018),
                'usuario_id_usuario'=> rand(1, 10),
                'ctlg_modelos_id_ctlg_modelos'=> rand(1, 10),
                'ctlg_hologramas_id_ctlg_hologramas'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
