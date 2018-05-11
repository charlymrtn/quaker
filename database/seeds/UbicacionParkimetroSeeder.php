<?php

use Illuminate\Database\Seeder;
use App\UbicacionParkimetro;


class UbicacionParkimetroSeeder extends Seeder
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
            DB::table('ubicacion_parkimetro')->insert([
                'latitud'=>$faker->latitude(),
                'longitud'=>$faker->longitude(),
                'usuario_id_usuario'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
