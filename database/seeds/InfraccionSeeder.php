<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Infraccion;

class InfraccionSeeder extends Seeder
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
            DB::table('infracciones')->insert([
                'folio' => md5($faker->postcode),
                'fecha'=>$faker->date(),
                'descripcion'=>$faker->text(20),
                'situacion'=>$faker->text(20),
                'fundamento'=>$faker->text(50),
                'sancion'=>$faker->text(50),
                'motivo_infraccion'=>$faker->text(50),
                'pagada'=>rand(0,1),
                'vehiculo_id_vehiculo'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
