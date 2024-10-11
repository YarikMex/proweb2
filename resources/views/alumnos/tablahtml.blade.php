
<a href="{{route('alumnos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Email</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumn)
            <tr>
                <td scope="row">{{ $alumn->id }}</td>
                <td>{{ $alumn->nombre }}  </td>
                <td>{{ $alumn->apellidopaterno }}</td>
                <td>{{ $alumn->email }}</td>
                <td><a href="{{route('alumnos.edit',$alumn->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('alumnos.show',$alumn->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('alumnos.show',$alumn->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alumnos->links() }}

</div>