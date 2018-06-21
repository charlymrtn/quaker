<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\CtlgMarcas;

class CtlgMarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('ctlg_marcas')->insert([
                'marca' => 'Ford',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Honda',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Chrysler',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Chevrolet',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Nissan',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Volkswagen',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        DB::table('ctlg_marcas')->insert([
                'marca' => 'Toyota',
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
    }
}
