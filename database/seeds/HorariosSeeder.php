<?php

use Illuminate\Database\Seeder;
use App\Horarios;

class HorariosSeeder extends Seeder
{
    protected $horarios = [
        ['Metropolitana', '05:00:00', '22:00:00', '05:00:00', '22:00:00'],
        ['Foraneo', '05:00:00', '11:00:00', '05:00:00', '22:00:00'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->horarios as $horario)
        {
            Horarios::create([
                    'tipo'    => $horario[0],
                    'inicio_sem'    => $horario[1],
                    'fin_sem'    => $horario[2],
                    'sab_inicio'    => $horario[3],
                    'sab_fin'    => $horario[4],
                ]
            );
        }

    }
}
