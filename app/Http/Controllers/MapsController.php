<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\UltimoPinUbicacion as Ubicacion;

class MapsController extends Controller
{
    //
    public function map($id,$vehiculo)
    {
    	# code...
    	$ubicacion = Ubicacion::where('usuario_id_usuario',$id)->first();

    	if ($ubicacion) {
    		# code...
    		$map = Mapper::map($ubicacion->latitud, $ubicacion->longitud);
    		return view('quaker.map',compact('map','id','vehiculo'));
    	}else{
    		return response()->json('no hay ubicaciones de ese usuario',500);
    	}
    	
    }
}
