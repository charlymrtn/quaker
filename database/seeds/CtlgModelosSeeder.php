<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\CtlgModelos;

class CtlgModelosSeeder extends Seeder
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
            DB::table('ctlg_modelos')->insert([
                'modelo' => $faker->domainName,
                'ctlg_marcas_id_ctlg_marcas'=> rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
