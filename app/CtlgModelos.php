<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;
use App\CtlgMarcas;

class CtlgModelos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_modelos';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_modelos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'modelo',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_ctlg_modelos'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class);
    }
    public function marca()
    {
        return $this->belongsTo(CtlgMarcas::class);
    }
}
