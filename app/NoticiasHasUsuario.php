<?php

namespace App;
use App\Usuario;
use App\Noticias;

use Illuminate\Database\Eloquent\Model;

class NoticiasHasUsuario extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'noticias_has_usuario';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_noticias_has_usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'noticias_id_noticias', 'usuario_id_usuario',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_poliza_seguro'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    public function noticias(){
        return $this->belongsTo(Noticias::class);
    }
}
