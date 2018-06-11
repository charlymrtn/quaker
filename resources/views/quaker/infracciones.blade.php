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
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Sancion</th>
                <th>Motivo</th>
                <th>Pagada</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($infracciones as $multa)
                <tr>
                  <td>{{$multa->id_infraccion}}</td>
                  <td>{{$multa->descripcion}}</td>
                  <td>{{$multa->fecha}}</td>
                  <td>{{$multa->sancion}}</td>
                  <td>{{$multa->motivo_infraccion}}</td>
                  <td>@if ($multa->pagada == 1)
                    SI @else NO  
                  @endif</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
    </div>
</div>
@endsection
