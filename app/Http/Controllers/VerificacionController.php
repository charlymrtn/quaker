<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Verificacion;
use App\Usuario;
use Auth;

class VerificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(
        Verificacion::all()
      );
      //$usuario = Usuario::where('id_usuario', Auth::guard('api')->id())->first();
      //dd($usuario->id_usuario);
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
      $insert = DB::table('verificacion')->insert([
            [
                'fecha_verificacion' => $request->fecha_verificacion,
                'cantidad' => $request->cantidad,
                'vehiculo_id_vehiculo' => $request->vehiculo_id_vehiculo,
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
      $coche = DB::select(DB::raw("SELECT B.id_vehiculo, B.alias, B.placas, B.estado, B.anio, C.fecha_verificacion, C.cantidad FROM
        (users AS A JOIN vehiculo AS B) JOIN verificacion AS C ON  A.id_usuario = B.usuario_id_usuario AND B.id_vehiculo = C.vehiculo_id_vehiculo WHERE id_verificacion = '$id'"));
      return response()->json(
          $coche
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
      $update = DB::table('verificacion')
            ->where('id_verificacion', $id)
            ->update([
              'fecha_verificacion' => $request->fecha_verificacion,
              'cantidad' => $request->cantidad,
              'vehiculo_id_vehiculo' => $request->vehiculo_id_vehiculo,
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
      $delete = DB::table('verificacion')->where('id_verificacion', '=', $id)->delete();
      if ($delete) {
          return response()->json('OK. Borrado exitosamente', 201);
      }
    }
}
