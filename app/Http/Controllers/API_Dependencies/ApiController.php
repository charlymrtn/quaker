<?php

namespace App\Http\Controllers\API_Dependencies;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use stdClass;

use App\CtlgHologramas as Holograma;
use App\CtlgMarcas as Marca;
use App\CtlgModelos as Modelo;


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


}
