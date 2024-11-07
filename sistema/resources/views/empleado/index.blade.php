<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr class="">
                <td scope="row">{{$empleado->id}}</td>
                <td>{{$empleado->foto}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>Editar | Borrar</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
