<?php

use Illuminate\Database\Seeder;
use App\Foto;

class FotoSeeder extends Seeder
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
                'ubicacion'=>$faker->file($sourceDir, $targetDir, false),
                'vehiculo_id_vehiculo'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
