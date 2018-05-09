<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\ServicioMantenimiento;

class ServicioMantenimientoSeeder extends Seeder
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
            DB::table('servicio_mantenimiento')->insert([
                'fecha_servicio'=>$faker->time(),
                'motivo'=>$faker->date(),
                'monto_servicio'=> '2500',            
                'vehiculo_id_vehiculo'=> rand(1, 10),               
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
