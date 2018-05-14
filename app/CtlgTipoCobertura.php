<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PolizaSeguro;

class CtlgTipoCobertura extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_tipo_cobertura';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_tipo_cobertura';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_tipo_coberturacol',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_ctlg_tipo_cobertura'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function polizaSeguro()
    {
        return $this->belongsTo(PolizaSeguro::class);
    }
}
