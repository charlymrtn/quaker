@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <a class="btn btn-primary" href="{{action('VehiculoController@index')}}" role="button">Back</a>
          <div class="card" style="width: 40rem;">
          <div class="card-body">
            <form method="POST" action="{{url('vehiculos')}}/{{$vehiculo->id_vehiculo}}" enctype="multipart/form-data">
                @method('PUT')
              @csrf
              <div class="form-group">
                <label for="alias">Alias</label>
                <input type="text" class="form-control" id="alias" name="alias" aria-describedby="tituloHelp" placeholder="Ingresa Alias" value="{{$vehiculo->alias}}">
              </div>
              <div class="form-group">
                <label for="placas">Placas</label>
                <input type="text" class="form-control" id="placas" name="placas" aria-describedby="tituloHelp" placeholder="Ingresa placas" value="{{$vehiculo->placas}}">
              </div>
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" aria-describedby="tituloHelp" placeholder="Ingresa estado" value="{{$vehiculo->estado}}">
              </div>
              <div class="form-group">
                <label for="placas">Año</label>
                <input type="text" class="form-control" id="anio" name="anio" aria-describedby="tituloHelp" placeholder="Ingresa anio" value="{{$vehiculo->anio}}">
              </div>

              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>

        </div>
    </div>
</div>
@endsection
