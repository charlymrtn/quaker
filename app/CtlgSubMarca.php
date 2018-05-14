<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class CtlgSubMarca extends Model
{
    protected $table = 'ctlg_sub_marca';
    protected $primaryKey = 'id_ctlg_sub_marca';
    protected $fillable = [
        'nombre_sub_marca',
    ];
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id_ctlg_sub_marca'
    ];
    protected $dates = [
        'created_at',
        'update_at'
    ];
    
    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
