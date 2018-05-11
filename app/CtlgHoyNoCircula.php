<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HoyNoCircula;

class CtlgHoyNoCircula extends Model {

   protected $table = 'ctlg_hoy_no_circula';
   protected $primaryKey = 'id_ctlg_no_circula';
   protected $fillable = [
     'termincacion_placa',
     'engomado',
     'dia_semana'
   ];
   protected $dates = [
     'created_at',
     'updated_at'
   ];
   
   public function hoyNoCircula()
   {
      return $this->hasMany(HoyNoCircula::class);
   }
}
