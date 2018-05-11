<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

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
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
