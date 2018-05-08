<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $fillable = [
        'alias',
        'placas',
        'usuario_id_usuario',
        'ctlg_marcas_id_ctlg_marcas',
        'ctlg_modelos_id_ctlg_modelos',
        'ctlg_hologramas_id_ctlg_hologramas'
    ];
    protected $guarded = [
        'id_vehiculo'
    ];
    
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function catalogoMarcas()
    {
        return $this->belongsTo('App\CtlgMarcas');
    }
    public function modelos()
    {
        return $this->belongsTo('App\CtlgModelos');
    }
    public function catalogoHologramas()
    {
        return $this->belongsTo('App\CtlgHologramas');
    }
    public function serviciosMantenimientos()
    {
        return $this->hasMany('App\ServicioMantenimiento');
    }
    public function infracciones()
    {
        return $this->hasMany('App\Infraccion');
    } 
    public function verificaciones()
    {
        return $this->hasMany('App\Verificacion');
    } 
    public function polizaSeguro()
    {
        return $this->hasMany('App\PolizaSeguro');
    } 
}
