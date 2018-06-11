@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h5>Vehicles</h5>
          <div class="card-deck">
            @foreach ($vehiculos as $auto)
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><a href="vehiculos/{{$auto->id_vehiculo}}">{{$auto->alias}}</a></h5>
                  <p class="card-text">{{$auto->estado}}</p>
                  <p class="card-text">{{$auto->modelos->modelo}}</p>
                  <p class="card-text">{{$auto->modelos->marca->marca}}</p>
                  <p class="card-text"><a href="usuario/{{$auto->id_vehiculo}}">{{$auto->usuario->nombre}}</a></p>
                  <p class="card-text"><a href="infracciones/{{$auto->id_vehiculo}}">Tickets</a> </p>
                  <p class="card-text"><a href="servicios/{{$auto->id_vehiculo}}">Services</a> </p>
                  <p class="card-text"><small>{{$auto->anio}}</small></p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </div>
    {{ $vehiculos->links() }}
</div>
@endsection
