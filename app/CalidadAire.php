<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class CalidadAire extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calidad_aire';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_calidad_aire';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aqs',
        'usuario_id_usuario',
    ];

    protected $guarded = [
        'id_calidad_aire'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
