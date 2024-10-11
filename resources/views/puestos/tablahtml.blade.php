
<a href="{{route('puestos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Puesto</th>
                <th scope="col">Tipo Puesto</th>
               
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
            <tr>
                <td scope="row">{{ $puesto->idPuesto }}</td>
                <td>{{ $puesto->nombrePuesto }}  </td>
                <td>{{ $puesto->tipoPuesto }}</td>
                <td><a href="{{route('puestos.edit',$puesto->idPuesto)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('puestos.show',$puesto->idPuesto)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('puestos.show',$puesto->idPuesto)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $puestos->links() }}

</div>