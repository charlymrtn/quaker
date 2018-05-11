<?php

use Illuminate\Database\Seeder;
use App\CtlgHoyNoCircula;

class CtlgHoyNoCirculaSeeder extends Seeder
{
    protected $hoyNoCircula = [
        ['5', 'Amarillo', 'Lunes'],
        ['6', 'Amarillo', 'Lunes'],
        ['7', 'Rosa', 'Martes'],
        ['8', 'Rosa', 'Martes'],
        ['3', 'Rojo', 'Miercoles'],
        ['4', 'Rojo', 'Miercoles'],
        ['1', 'Verde', 'Jueves'],
        ['2', 'Verde', 'Jueves'],
        ['9', 'Azul', 'Viernes'],
        ['0', 'Azul', 'Viernes'],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->hoyNoCircula as $hoy)
        {
            CtlgHoyNoCircula::create([
                    'terminacion_placa'    => $hoy[0],
                    'engomado'    => $hoy[1],
                    'dia_semana'    => $hoy[2],
                ]
            );
        }
    }
}
