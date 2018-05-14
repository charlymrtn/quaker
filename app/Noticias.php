<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Noticias extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'noticias';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_noticias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_noticia',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_noticias'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function usuario(){
        return $this->hasMany(Usuario::class);
    }
}
