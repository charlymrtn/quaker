<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    protected $table = 'infracciones';
    protected $fillable = [
        'folio',
        'fecha',
        'descripcion',
        'situacion',
        'fundamentos',
        'sancion',
        'motivo_infraccion',
        'pagada',
        'vehiculo_id_vehiculo'
    ];
    protected $guarded = [
        'id_infraccion'
    ];
     public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
}
