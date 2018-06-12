<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
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
      //return $vehiculos;
      return view ('quaker.vehiculos',compact('vehiculos'));
        // return response()->json(
        //     Vehiculo::all()
        // );
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

        return view('quaker.vehiculo',compact('vehiculo'));
        // return response()->json(
        //     $users = DB::table('vehiculo')
        //         ->join('ctlg_hologramas', 'ctlg_hologramas.id_ctlg_hologramas', '=', 'vehiculo.ctlg_hologramas_id_ctlg_hologramas')
        //         ->join('ctlg_modelos', 'ctlg_modelos.id_ctlg_modelos', '=', 'vehiculo.ctlg_modelos_id_ctlg_modelos')
        //         ->join('users', 'users.id_usuario', '=', 'vehiculo.usuario_id_usuario')
        //         ->select(
        //             'vehiculo.alias',
        //             'vehiculo.placas',
        //             'vehiculo.estado',
        //             'vehiculo.anio',
        //             'users.nombre',
        //             'ctlg_modelos.modelo',
        //             'ctlg_hologramas.holograma')
        //         ->where('id_vehiculo', $id)
        //         ->get()
        //);
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
        $update = DB::table('vehiculo')
            ->where('id_vehiculo', $id)
            ->update([
                'alias' => $request->alias,
                'placas' => $request->placas,
                'estado' => $request->estado,
                'anio' => $request->anio,
                'usuario_id_usuario' => $request->usuario_id_usuario,
                'ctlg_modelos_id_ctlg_modelos' => $request->ctlg_modelos_id_ctlg_modelos,
                'ctlg_hologramas_id_ctlg_hologramas' => $request->ctlg_hologramas_id_ctlg_hologramas,
                'updated_at' =>date('Y-m-d H:i:s')
            ]);

        if($update){
            return response()->json($update, 201);
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
