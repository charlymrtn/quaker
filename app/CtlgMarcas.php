<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class CtlgMarcas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_marcas';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_marcas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_ctlg_marcas'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class);
    }
}
