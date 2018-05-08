<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioMantenimiento extends Model
{
    protected $table = 'servicio_mantenimiento';
    protected $fillable = [
        'fecha_servicio', 
        'motivo',
        'monto_servicio',
        'vehiculo_id_vehiculo',
    ];
    protected $guarded = [
        'id_servicio_mantenimiento'
    ];
    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
}
