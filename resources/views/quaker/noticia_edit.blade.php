@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{action('NoticiasController@index')}}" role="button">Back</a>
          <div class="card" style="width: 24rem;">
          <img class="card-img-top" @isset($noticia->imagen)
            src="{{asset($noticia->imagen)}}"
          @else
            src=""
          @endisset
          @isset($noticia->titulo)
            alt="{{$noticia->titulo}}"
          @else
            alt=""
          @endisset
          >
          <div class="card-body">
            <form method="POST" @isset($var)
              action="{{url('news')}}/{{$noticia->id}}"
            @else
              action="{{url('news')}}"
            @endisset  enctype="multipart/form-data">
            @isset($noticia->id)
                @method('PUT')
            @endisset
              @csrf
              <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="tituloHelp" placeholder="Ingresa Titulo" value="{{isset($noticia->titulo)?$noticia->titulo : ""}}">
              </div>
              <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" rows="5" id="contenido" name="contenido" aria-describedby="contentHelp" placeholder="Ingresa Contenido">{{isset($noticia->contenido)?$noticia->contenido : ""}}</textarea>
              </div>
              <div class="form-group">
                <label for="imagen">Image</label>
                <input type="file" class="form-control-file" name="imagen" id="imagen">
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>

        </div>
    </div>
</div>
@endsection
