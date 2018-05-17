<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'url_imagen',
        'noticias_id_noticias',
        'api_token'
    ];
    protected $guarded = [
        'id_usuario'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',// 'remember_token', 'api_token',
    ];

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function noticiasHasUsuario()
    {
        return $this->hasMany(NoticiasHasUsuario::class);
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
    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
