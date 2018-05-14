<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;
use App\Noticias;
use App\CalidadAire;
use App\UltimoPinUbicacion;
use App\UbicacionParkimetro;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'email',
        'passworld',
        'url_imagen',
        'sesion',
        'noticias_id_noticias'
    ];
    protected $guarded = [
        'id_usuario'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function noticias()
    {
        return $this->belongsTo(Noticias::class);
    }
    public function calidadAire()
    {
        return $this->hasMany(CalidadAire::class);
    }
    public function ultimoPinUbicacion()
    {
       return $this->hasMany(UltimoPinUbicacion::class);
    }
    public function ubicacionParkimetro()
    {
       return $this->hasOne(UbicacionParkimetro::class);
    }
}
