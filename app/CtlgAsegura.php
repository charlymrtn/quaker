<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PolizaSeguro;

class CtlgAsegura extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ctlg_asegura';
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_ctlg_asegura';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_asegura',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function polizaSeguro()
    {
        return $this->belongsTo('App\PolizaSeguro');
    }
}
