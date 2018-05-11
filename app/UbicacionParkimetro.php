<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class UbicacionParkimetro extends Model
{
    protected $table = 'ubicacion_parkimetro';
    protected $primaryKey = 'id_ubicacion_parkimetro';
    protected $fillable = [
        'latitud',
        'longitud',
        'usuario_id_usuario',
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public function usuario()
    {
       return $this->hasOne(Usuario::class);
    }
}
