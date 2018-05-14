<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class ServicioMantenimiento extends Model
{
    protected $table = 'servicio_mantenimiento';
    protected $primaryKey = 'id_servicio_mantenimiento';
    protected $fillable = [
        'fecha_servicio', 
        'motivo',
        'monto_servicio',
        'vehiculo_id_vehiculo',
    ];
    protected $guarded = [
        'id_servicio_mantenimiento'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
