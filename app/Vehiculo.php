<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;
use App\CtlgMarcas;
use App\CtlgModelos;
use App\CtlgHologramas;
use App\ServicioMantenimiento;
use App\Infraccion;
use App\Verificacion;
use App\PolizaSeguro;
use App\CtlgSubMarca;
use App\Foto;

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
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function catalogoMarcas()
    {
        return $this->belongsTo(CtlgMarcas::class);
    }
    public function modelos()
    {
        return $this->belongsTo(CtlgModelos::class);
    }
    public function catalogoHologramas()
    {
        return $this->belongsTo(CtlgHologramas::class);
    }
    public function serviciosMantenimientos()
    {
        return $this->hasMany(ServicioMantenimiento::class);
    }
    public function infracciones()
    {
        return $this->hasMany(Infraccion::class);
    } 
    public function verificaciones()
    {
        return $this->hasMany(Verificacion::class);
    } 
    public function polizaSeguro()
    {
        return $this->hasMany(PolizaSeguro::class);
    } 
    public function ctlgSubMarca()
    {
        return $this->belongsTo(CtlgSubMarca::class);
    }
    public function foto()
    {
       return $this->hasMany(Foto::class);
    }
    
}
