@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="table-responsive">
            <a class="btn btn-primary" href="{{action('VehiculoController@index')}}" role="button">Back</a>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Monto</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($servicios as $servicio)
                <tr>
                  <td>{{$servicio->id_servicio_mantenimiento}}</td>
                  <td>{{$servicio->fecha_servicio}}</td>
                  <td>{{$servicio->motivo}}</td>
                  <td>{{$servicio->monto_servicio}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
    </div>
</div>
@endsection
