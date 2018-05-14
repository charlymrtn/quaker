<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HoyNoCircula;

class Horarios extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'id_horario';
    protected $fillable = [
        'inicio_sem',
        'fin_sem',
        'sab_inicio',
        'sab_fin',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_horario'
    ];
    protected $dates = [
        'created_at',
        'update_at'
    ];
    
    public function hoyNoCircula()
    {
        return $this->hasMany(HoyNoCircula::class);
    }
}
