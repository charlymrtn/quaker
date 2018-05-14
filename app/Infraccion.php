<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class Infraccion extends Model
{
    protected $table = 'infracciones';
    protected $primaryKey = 'id_infraccion';
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
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
