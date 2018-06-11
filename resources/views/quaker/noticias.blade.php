@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h5><a href="news/create">Create Noticia</a> </h5>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($noticias as $noticia)
                <tr>
                <th scope="row">{{$noticia->id}}</th>
                <td><a href="news/{{$noticia->id}}">{{$noticia->titulo}}</a></td>
                <td><span>{{$noticia->created_at}}</span></td>
                {{-- <td><img src="{{$noticia->imagen}}" alt="{{$noticia->titulo}}" class="img-fluid"></td> --}}
                </tr>
              @endforeach
          </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
