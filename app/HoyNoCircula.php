<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Horarios;
use App\CtlgHologramas;
use App\CtlgHoyNoCircula;
use App\Vehiculo;

class HoyNoCircula extends Model
{
    protected $table = 'hoy_no_circula';
    protected $primaryKey = 'id_hoy_no_circula';
    protected $fillable = [
        'ctlg_hologramas_id_ctlg_hologramas',
        'horario_id_horario',
        'ctlg_id_ctlg_hoy_no_circula',
        'vehiculo_id_vehiculo'
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_hoy_no_circula'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public function horarios()
    {
        return $this->belongsTo(Horarios::class);
    }
    public function ctlgHologramas()
    {
        return $this->belongsTo(CtlgHologramas::class);
    }
    public function ctlgHoyNoCircula()
    {
        return $this->belongsTo(CtlgHoyNoCircula::class);
    }
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
