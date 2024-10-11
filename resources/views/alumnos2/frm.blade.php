@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos2/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>   FORM PAAAAAAAAAAAAAA</h1>
<ul>
@foreach ($errors->all() as $error )

<li>
  {{$error}}
</li>
  
@endforeach

</ul>
@if ($accion== 'C')
  
<h1>Insertando FRM</h1>
<form action="{{route('alumnos.store')}}" method="POST">

  @elseif  ($accion== 'E')
<h1>Editando frm</h1>
  <form action="{{ route('alumnos.update',$alumno->id)}}" method="POST">
    @elseif  ($accion== 'D')
    <h1>Eliminando</h1>
    <form action="{{route('alumnos.destroy',$alumno)}}" method="POST">
    @endif
    @csrf
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" require value="{{old('nombre', $alumno->nombre)}}" {{$des}}>
          @error("nombre")
          <p class="text-danger">error en: {{$message}}</p>
            
          @enderror
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="apellidopaterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno"  require value="{{old('apellidopaterno', $alumno->apellidopaterno)}}"{{$des}}>
          @error("nombre")
          <p class="text-danger">error en: {{$message}}</p>
            
          @enderror
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email"  require value="{{old('email', $alumno->email)}}"{{$des}}>
          @error("nombre")
          <p class="text-danger">error en: {{$message}}</p>
            
          @enderror
        </div>
      </div>
  
      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
        </div>
      </div>

    



  </form>

@endsection


