<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class UltimoPinUbicacion extends Model
{
    protected $table = 'ultimo_pin_ubicacion';
    protected $primaryKey = 'id_ultimo_pin_ubicacion';
    protected $fillable = [
        'latitud',
        'longitud',
        'usuario_id_usuario'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public function usuario()
    {
       return $this->belongTo(Usuario::class);
    }
}
