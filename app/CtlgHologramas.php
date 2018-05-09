<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class CtlgHologramas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_hologramas';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_hologramas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'holograma',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class);
    }
}
