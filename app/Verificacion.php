<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model
{
    protected $table = 'verificacion';
    protected $fillable = [
        'fecha_verificacion',
        'cantidad',
        'vehiculo_id_vehiculo',
    ];
    protected $guarded = [
        'id_verificacion'
    ];
    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
}
