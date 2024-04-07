@extends('layouts.boot')

@section('menu')
<div class='text-center'>
    <h1>Tabla de Productos</h1>
</div>

<a href="Empleado/Producto/create" class='btn btn-primary'>Crear Nuevo Producto</a>
<table class='table'>
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nivel</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($Empleados as $Empleado)
    <tr>
        <td>{{$Empleado->id}}</td>
        <td>{{$Empleado->codempleado}}</td>
        <td>{{$Empleado->nombre}}</td>
        <td>{{$Empleado->apellido}}</td>
        <td>{{$Empleado->nivel}}</td>
        <td>{{$Empleado->telefono}}</td>
        <td><a href="/edit" class='btn btn-info'>Editar</a>
            <button class='btn btn-warning'>Eliminar</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>



@endsection