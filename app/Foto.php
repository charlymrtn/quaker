<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ubicacion',
        'vehiculo_id_vehiculo'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);  
    }
}
