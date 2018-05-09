<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;
use App\CtlgAsegura;
use App\CtlgTipoPago;
use App\CtlgTipoCobertura;

class PolizaSeguro extends Model
{
    protected $table = 'poliza_seguro';
    protected $fillable = [
        'numero_poliza',
        'fecha_emision',
        'fecha_pago',
        'vehiculo_id_vehiculo',
        'ctlg_tipo_cobertura_id_ctlg_tipo_cobertura',
        'ctlg_tipo_pago_id_ctlg_tipo_pago',
        'ctlg_asegura_id_ctlg_asegura',
    ];
    protected $guarded = [
        'id_poliza_seguro'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
    public function ctlgAseguradoras()
    {
        return $this->hasOne('App\CtlgAsegura');
    }
    public function ctlgTipoPago()
    {
        return $this->hasOne('App\CtlgTipoPago');
    }
    public function ctlgTipoCobertura()
    {
        return $this->hasOne('App\CtlgTipoCobertura');
    }
}
