<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Noticia;

class NoticiasTableSeeder extends Seeder
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
            DB::table('noticias')->insert([
                'titulo' => $faker->text(10),
                'contenido' => $faker->paragraph(),
                'imagen' => $faker->imageUrl(),
                'url' => $faker->url,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
