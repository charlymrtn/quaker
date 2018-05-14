<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id_foto';
    protected $fillable = [
        'ubicacion',
        'vehiculo_id_vehiculo'
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_foto'
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
