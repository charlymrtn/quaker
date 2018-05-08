<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
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
    public function vehiculo()
    {
        return $this->hasMany('App\Vehiculo');
    }
    public function noticias()
    {
        return $this->belongsTo('App\Noticia');
    }
}
