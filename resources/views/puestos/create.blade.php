@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('puestos/tablahtml') {{-- Si tienes una tabla para mostrar puestos, de lo contrario puedes omitir esta línea --}}

@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')

<form action="{{route('puestos.store')}}" method="POST">
    @csrf


    
    <div class="row mb-3">
        <label for="nombrePuesto" class="col-sm-2 col-form-label">Nombre del Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="tipoPuesto" class="col-sm-2 col-form-label">Tipo de Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tipoPuesto" name="tipoPuesto" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>

</form>

@endsection
