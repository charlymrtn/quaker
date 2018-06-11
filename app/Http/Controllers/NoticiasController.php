<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use DB;
use stdClass;

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
        return view('quaker.noticias',compact('noticias'));
        //return response()->json($noticias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->hasFile('imagen')) {

      }

        $noticia = Noticia::create([
                  'titulo' => $request->title,
                  'contenido' => $request->contenido,
                  'imagen' => '',
                  'url' => ''
              ]);
        if($noticia){
          if ($request->hasFile('imagen')) {
            $imageName = $noticia->id.'.'.$request->file('imagen')->getClientOriginalExtension();
            $request->file('imagen')->move(
              base_path() . '/public/images/catalog/', $imageName
            );
            $notiRuta = '/images/catalog/'. $imageName;
            $noticia->imagen = $notiRuta;
            $noticia->save();
          }
            return view('quaker.noticia',compact('noticia'));
            //return response()->json($insert, 201);
        }else{
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
            return view('quaker.noticia',compact('noticia'));
            //return response()->json($noticia);
        } else {
            return response()->json("No se encontro ningun resultado con el id proporcionado", 200);
        }

    }

    public function edit($id)
    {
      // code...
      $noticia =Noticia::find($id);
      if (!empty($noticia)) {
          return view('quaker.noticia_edit',compact('noticia'));
          //return response()->json($noticia);
      } else {
          return response()->json("No se encontro ningun resultado con el id proporcionado", 200);
      }

    }

    public function create()
    {
      // code...
      $noticia =new stdClass;
      return view('quaker.noticia_edit',compact('noticia'));
    }

    public function destroy($id)
    {
      // code...
      Noticia::destroy($id);
      return redirect('news');;
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
        $update =Noticia::find($id);

        if ($request->hasFile('imagen')) {
          // code...

          $imageName = $update->id.'.'.$request->file('imagen')->getClientOriginalExtension();
          $request->file('imagen')->move(
            base_path() . '/public/images/catalog/', $imageName
          );
          $notiRuta = '/images/catalog/'. $imageName;
        }

        $update =Noticia::find($id);
        $update->titulo =$request->title;
        $update->contenido =$request->contenido;
        if (isset($notiRuta)) {
          // code...
          $update->imagen = $notiRuta;
        }
        //$update->url = $request->url;
        $update->save();

        if($update){
            //return response()->json($update, 201);
            return redirect('news/'.$update->id);
        } else {
            return response()->json($update->errors()->all());
        }
    }
}
