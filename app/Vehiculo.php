<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;
use App\CtlgModelos;
use App\CtlgHologramas;
use App\ServicioMantenimiento;
use App\Infraccion;
use App\Verificacion;
use App\PolizaSeguro;
use App\Foto;
use App\HoyNoCircula;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey = 'id_vehiculo';
    protected $fillable = [
        'alias',
        'placas',
        'anio',
        'usuario_id_usuario',
        'ctlg_modelos_id_ctlg_modelos',
        'ctlg_hologramas_id_ctlg_hologramas'
    ];
    protected $guarded = [
        'id_vehiculo'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'usuario_id_usuario');
    }
    public function modelos()
    {
        return $this->belongsTo(CtlgModelos::class,'ctlg_modelos_id_ctlg_modelos');
    }
    public function catalogoHologramas()
    {
        return $this->belongsTo(CtlgHologramas::class);
    }
    public function serviciosMantenimientos()
    {
        return $this->hasMany(ServicioMantenimiento::class,'vehiculo_id_vehiculo');
    }
    public function infracciones()
    {
        return $this->hasMany(Infraccion::class,'vehiculo_id_vehiculo');
    }
    public function verificaciones()
    {
        return $this->hasMany(Verificacion::class,'vehiculo_id_vehiculo');
    }
    public function polizaSeguro()
    {
        return $this->hasMany(PolizaSeguro::class);
    }
    public function foto()
    {
       return $this->hasMany(Foto::class);
    }
    public function hoyNoCircula()
    {
        return $this->hasMany(HoyNoCircula::class);
    }
}
