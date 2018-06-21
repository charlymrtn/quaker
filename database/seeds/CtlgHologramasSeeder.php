<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\CtlgHologramas;

class CtlgHologramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            DB::table('ctlg_hologramas')->insert([
                'holograma' => '00',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
            DB::table('ctlg_hologramas')->insert([
                'holograma' => '0',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
            DB::table('ctlg_hologramas')->insert([
                'holograma' => '1',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
            DB::table('ctlg_hologramas')->insert([
                'holograma' => '2',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
    }
}
