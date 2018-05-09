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
        for ($x = 1; $x < 11; $x++) {
            DB::table('usuario')->insert([
                'nombre' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'url_imagen' => $faker->url,
                'sesion' => md5($faker->randomNumber()),
                'noticias_id_noticias' => rand(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }

}
