<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Usuario;

class UsuarioSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        DB::table('users')->insert([
            'nombre' => 'Carlos Martin',
            'email' => 'carlos.martin@red-wolf.com.mx',
            'password' => bcrypt('123456'),
            'status' => true,
            'api_token' => str_random(60),
            'url_imagen' => $faker->imageUrl(640,480,'people'),
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        for ($x = 2; $x < 11; $x++) {
            DB::table('users')->insert([
                'nombre' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'status' => true,
                'api_token' => str_random(60),
                'url_imagen' => $faker->imageUrl(640,480,'people'),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }

}
