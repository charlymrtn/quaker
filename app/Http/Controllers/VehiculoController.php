<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\CtlgModelos as Modelo;
use Auth;
use DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vehiculos  = Vehiculo::paginate(4);
      return view ('quaker.vehiculos',compact('vehiculos'));
    }

    public function indexApi()
    {

        return response()->json(Vehiculo::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = DB::table('vehiculo')->insert([
            [
                'alias' => $request->alias,
                'placas' => $request->placas,
                'estado' => $request->estado,
                'anio' => $request->anio,
                'usuario_id_usuario' => $request->usuario_id_usuario,
                'ctlg_modelos_id_ctlg_modelos' => $request->ctlg_modelos_id_ctlg_modelos,
                'ctlg_hologramas_id_ctlg_hologramas' => $request->ctlg_hologramas_id_ctlg_hologramas,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
        ]);
        if($insert){
            return response()->json($insert, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        $modelos = Modelo::all();

        return view('quaker.vehiculo',compact('vehiculo','modelos'));

    }

    public function showApi($id)
    {
        $vehiculo = Vehiculo::find($id);

        return response()->json($vehiculo,201);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $update = $this->updateCommon($request,$id);

        if ($update) {
          // code...
          return redirect('vehiculos/'.$update->id_vehiculo);
          //return response()->json($update, 201);

        }
    }

    public function updateApi(Request $request, $id)
    {

        $update = $this->updateCommon($request,$id);

        if ($update) {
          // code...
          return response()->json($update, 201);

        }
    }

    public function updateCommon(Request $request, $id)
    {
      // code...
      $update = Vehiculo::find($id);

      $update->alias = $request->alias;
      $update->placas = $request->placas;
      $update->estado = $request->estado;
      $update->anio = $request->anio;
      $update->ctlg_modelos_id_ctlg_modelos = $request->modelo;

      $update->save();

      if ($update) {
        // code...
        return $update;
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('vehiculo')->where('id_vehiculo', '=', $id)->delete();
        if ($delete) {
            return response()->json('Borrado exitosamente', 201);
        }
    }

    public function infracciones($id)
    {
      // code...
      $vehiculo = Vehiculo::find($id);
      $infracciones = $vehiculo->infracciones;

      return view('quaker.infracciones',compact('infracciones'));
    }

    public function servicios($id)
    {
      // code...
      $vehiculo = Vehiculo::find($id);
      $servicios = $vehiculo->serviciosMantenimientos;

      return view('quaker.servicios',compact('servicios'));
    }

    public function usuario($id)
    {
      // code...
      $vehiculo = Vehiculo::find($id);
      $usuario = $vehiculo->usuario;
      //return $usuario;
      return view('quaker.usuario',compact('usuario','vehiculo'));
    }
}
