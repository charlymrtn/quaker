<?php

namespace App\Http\Controllers\API_Dependencies;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use stdClass;

use App\CtlgHologramas as Holograma;
use App\CtlgMarcas as Marca;
use App\CtlgModelos as Modelo;
use App\Usuario;
use App\Vehiculo;


class ApiController extends Controller {


    public function hologramas()
    {
      // code...
      $hologramas = Holograma::all();

      return response()->json(['hologramas'=>$hologramas],201);
    }

    public function marcas()
    {
      // code...
      $marcas = Marca::all();

      return response()->json(['marcas'=>$marcas],201);
    }

    public function modelos(Request $request)
    {
      // code...
      $id = $request->input('marca');
      $modelos = Modelo::where('ctlg_marcas_id_ctlg_marcas',$id)->get();

      return response()->json(['modelos'=>$modelos],201);

    }

    public function storeMany(Request $request)
    {
      // code...
      $token = $request->input('token');
      $vehiculos = $request->input('vehicles');
      $vehicles = array();

      $user = Usuario::where('api_token',$token)->first();

      if($user){
        foreach ($vehiculos as $vehiculo) {
          // code...
          $new = Vehiculo::create(['alias' => $vehiculo['name'],

                                   'estado' => 'new',
                                   'placas' => $vehiculo['registration_number'],
                                   'anio' => $vehiculo['year'],
                                   'usuario_id_usuario' => $user->id_usuario,
                                   'ctlg_modelos_id_ctlg_modelos' => $vehiculo['model'],
                                   'ctlg_hologramas_id_ctlg_hologramas' => $vehiculo['hologram']]);

          array_push($vehicles,$new);
        }

        return response()->json($vehicles,201);
      }else {
        // code...
        return response()->json(['message'=>'El usuario no existe'],201);
      }
    }


}
