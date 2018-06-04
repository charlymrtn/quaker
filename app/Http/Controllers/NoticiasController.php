<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use DB;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return response()->json($noticias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = DB::table('noticias')->insert([
            [
                'titulo' => $request->titulo,
                'contenido' => $request->contenido,
                'imagen' => $request->imagen,
                'url' => $request->url,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
        ]);
        if($insert){
            return response()->json($insert, 201);
        } else {
            return response()->json($insert->errors()->all());
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
        $noticia = Noticia::find($id);
        if (!empty($noticia)) {
            return response()->json($noticia);
        } else {
            return response()->json("No se encontro ningun resultado con el id proporcionado", 200);
        }
        
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
        $update = DB::table('noticias')
            ->where('id', $id)
            ->update([
                'titulo' => $request->titulo,
                'contenido' => $request->contenido,
                'imagen' => $request->imagen,
                'url' => $request->url,
                'updated_at' =>date('Y-m-d H:i:s')
            ]);

        if($update){
            return response()->json($update, 201);
        } else {
            return response()->json($update->errors()->all());
        }
    }
}
