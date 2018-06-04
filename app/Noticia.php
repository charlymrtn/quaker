<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'contenido', 'imagen', 'url'];
    protected $dates = ['created_at', 'update_at'];
}
