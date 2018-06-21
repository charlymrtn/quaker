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

        DB::table('ctlg_modelos')->insert(['modelo' => 'Lobo',
                'ctlg_marcas_id_ctlg_marcas'=> 1,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Fiesta',
                'ctlg_marcas_id_ctlg_marcas'=> 1,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Focus',
                'ctlg_marcas_id_ctlg_marcas'=> 1,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Civic',
                'ctlg_marcas_id_ctlg_marcas'=> 2,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'CR-V',
                'ctlg_marcas_id_ctlg_marcas'=> 2,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Accord',
                'ctlg_marcas_id_ctlg_marcas'=> 2,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Attitude',
                'ctlg_marcas_id_ctlg_marcas'=> 3,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);

        DB::table('ctlg_modelos')->insert(['modelo' => 'Challenger',
                'ctlg_marcas_id_ctlg_marcas'=> 3,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);

        DB::table('ctlg_modelos')->insert(['modelo' => 'Charger',
                'ctlg_marcas_id_ctlg_marcas'=> 3,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Malibu',
                'ctlg_marcas_id_ctlg_marcas'=> 4,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Sonic',
                'ctlg_marcas_id_ctlg_marcas'=> 4,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Cheyenne',
                'ctlg_marcas_id_ctlg_marcas'=> 4,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Tsuru',
                'ctlg_marcas_id_ctlg_marcas'=> 5,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Sentra',
                'ctlg_marcas_id_ctlg_marcas'=> 5,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Datsun',
                'ctlg_marcas_id_ctlg_marcas'=> 5,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Jetta',
                'ctlg_marcas_id_ctlg_marcas'=> 6,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Golf',
                'ctlg_marcas_id_ctlg_marcas'=> 6,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Gol',
                'ctlg_marcas_id_ctlg_marcas'=> 6,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Yaris',
                'ctlg_marcas_id_ctlg_marcas'=> 7,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Corolla',
                'ctlg_marcas_id_ctlg_marcas'=> 7,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_modelos')->insert(['modelo' => 'Camry',
                'ctlg_marcas_id_ctlg_marcas'=> 7,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
    }
}
