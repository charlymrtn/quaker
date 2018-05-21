<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use Auth;
use DB;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            Foto::all()
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
        $insert = DB::table('foto')->insert([
            [
                'ubicacion' => $request->ubicacion,
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
        return response()->json(
            $users = DB::table('foto')
                ->join('vehiculo', 'vehiculo.id_vehiculo', '=', 'foto.vehiculo_id_vehiculo')
                ->select('vehiculo.alias', 'foto.ubicacion', 'foto.created_at', 'foto.updated_at')
                ->where('usuario_id_usuario', Auth::guard('api')->id())
                ->get()
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
        $update = DB::table('foto')
            ->where('id_foto', $id)
            ->update([
                'ubicacion' => $request->ubicacion,
                'vehiculo_id_vehiculo' => $request->vehiculo_id_vehiculo,
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
        $delete = DB::table('foto')->where('id_foto', '=', $id)->delete();
        if ($delete) {
            return response()->json('Borrado exitosamente', 201);
        }
    }
}
