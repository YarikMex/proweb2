@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')

<form action="{{route('alumnos.store')}}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="apellidopaterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" required>
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
  
      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Crear</button>
        </div>
      </div>

    



  </form>

@endsection


