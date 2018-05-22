<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PolizaSeguro;
use App\Usuario;
use Auth;
use DB;

class PolizaSeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(
        PolizaSeguro::all()
      );
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
      $insert = DB::table('poliza_seguro')->insert([
            [
              'numero_poliza' => $request->numero_poliza,
              'fecha_emision' => $request->fecha_emision,
              'fecha_pago' => $request->fecha_pago,
              'vehiculo_id_vehiculo' => $request->vehiculo_id_vehiculo,
              'ctlg_tipo_cobertura_id_ctlg_tipo_cobertura' => $request->ctlg_tipo_cobertura_id_ctlg_tipo_cobertura,
              'ctlg_tipo_pago_id_ctlg_tipo_pago' => $request->ctlg_tipo_pago_id_ctlg_tipo_pago,
              'ctlg_asegura_id_ctlg_asegura' => $request->ctlg_asegura_id_ctlg_asegura,
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
      $usuario = Usuario::where('id_usuario', Auth::guard('api')->id())->first();
      $poliza = DB::select(DB::raw("SELECT B.numero_poliza, B.fecha_emision, B.fecha_pago, B.vehiculo_id_vehiculo FROM
        vehiculo AS A JOIN poliza_seguro AS B ON  A.id_vehiculo = B.vehiculo_id_vehiculo WHERE id_poliza_seguro = '$id'"));
      return response()->json(
          $poliza
      );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
      $update = DB::table('poliza_seguro')
            ->where('id_poliza_seguro', $id)
            ->update([
              'numero_poliza' => $request->numero_poliza,
              'fecha_emision' => $request->fecha_emision,
              'fecha_pago' => $request->fecha_pago,
              'vehiculo_id_vehiculo' => $request->vehiculo_id_vehiculo,
              'ctlg_tipo_cobertura_id_ctlg_tipo_cobertura' => $request->ctlg_tipo_cobertura_id_ctlg_tipo_cobertura,
              'ctlg_tipo_pago_id_ctlg_tipo_pago' => $request->ctlg_tipo_pago_id_ctlg_tipo_pago,
              'ctlg_asegura_id_ctlg_asegura' => $request->ctlg_asegura_id_ctlg_asegura,
              'updated_at' =>date('Y-m-d H:i:s')
            ]);

        if($update){
            return response()->json([
              'OK' => 'OK. Registro actualizado. Verificacion'
            ], 201);
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
      $delete = DB::table('poliza_seguro')->where('id_poliza_seguro', '=', $id)->delete();
      if ($delete) {
          return response()->json('OK. Borrado exitosamente', 201);
      }
    }
}
