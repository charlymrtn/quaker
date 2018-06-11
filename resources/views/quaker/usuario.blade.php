@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{action('VehiculoController@index')}}" role="button">Back</a>
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <p class="card-text">{{$usuario->nombre}}</p>
                <p class="card-text">{{$usuario->email}}</p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
