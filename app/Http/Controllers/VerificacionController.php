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
      $usuario = Usuario::where('id_usuario', Auth::guard('api')->id())->first();
      dd($usuario->id_usuario);
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
      $usuario = Usuario::where('id_usuario', Auth::guard('api')->id())->first();
      $fecha_verificacion = $request->input('fecha');
      $cantidad = $request->input('cantidad');
      //dd($usuario);
      $coche = DB::select(DB::raw("SELECT B.id_vehiculo FROM
        (users AS A JOIN vehiculo AS B) JOIN verificacion AS C ON  A.id_usuario = B.usuario_id_usuario AND B.id_vehiculo = C.vehiculo_id_vehiculo WHERE id_usuario = '$usuario->id_usuario'"));
      return Verificacion::create([
          'fecha_verificacion' => $fecha_verificacion,
          'cantidad' => $cantidad,
          'id_vehiculo' => $coche->id_vehiculo,
      ]);
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
      //dd($usuario);
      $coche = DB::select(DB::raw("SELECT B.id_vehiculo, B.alias, B.placas, B.estado, B.anio, C.fecha_verificacion, C.cantidad FROM
        (users AS A JOIN vehiculo AS B) JOIN verificacion AS C ON  A.id_usuario = B.usuario_id_usuario AND B.id_vehiculo = C.vehiculo_id_vehiculo WHERE id_usuario = '$usuario->id_usuario'"));
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
      $usuario = Usuario::where('id_usuario', Auth::guard('api')->id())->first();
      //se debe actualizar la verificación
      //$coche = DB::select(DB::raw("SELECT B.id_vehiculo, B.alias, B.placas, B.estado, B.anio, C.fecha_verificacion, C.cantidad FROM
        //(users AS A JOIN vehiculo AS B) JOIN verificacion AS C ON  A.id_usuario = B.usuario_id_usuario AND B.id_vehiculo = C.vehiculo_id_vehiculo WHERE id_usuario = '$usuario->id_usuario'"));
      $nuevaVerificacion = Verificacion::findOrFail($id)->update($request->all());
      return response()->json([
          'OK' => 'OK. Registro actualizado. Verificacion'
      ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
