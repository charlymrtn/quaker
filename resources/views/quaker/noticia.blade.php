@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{action('NoticiasController@index')}}" role="button">Back</a>
          <div class="card" style="width: 24rem;">
          <img class="card-img-top" src="{{asset($noticia->imagen)}}" alt="{{$noticia->titulo}}">
          <div class="card-body">
            <h5>{{$noticia->titulo}}</h5>
            <p class="card-text">{{$noticia->contenido}}</p>
          </div>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info"><a style="color:#ffffff; text-decoration:none;" href="{{route('news.edit', ['news' => $noticia->id])}}">Edit</a></button>
          <button type="button" class="btn btn-danger"><a onclick="return confirm('Sure to delete user?')" style="color:#ffffff; text-decoration:none;" href="{{route('delete', ['id' => $noticia->id])}}">Delete</a></button>
        </div>
        </div>
    </div>
</div>
@endsection
