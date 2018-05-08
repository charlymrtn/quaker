<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CtlgTipoPago extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_tipo_pago';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_tipo_pago';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_tipo_pago',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class);
    }
}
