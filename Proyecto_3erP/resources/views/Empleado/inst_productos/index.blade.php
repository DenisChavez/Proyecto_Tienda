@extends('layouts.boot')
<head>
<style>
    .espacio{
      height: 60px;
    }
    img{
        max-height: 50px;
    }
  </style>
</head>
@section('menu')

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Tabla de Productos
                        <a href="/Empleado" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='espacio'></div>
<table class='table table-bordered'>
<thead>
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Unidades</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Usuario</th>
        <th>Imagen</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
</thead>
<tbody>
    @foreach($datos as $dato)
    <tr>
        <th>{{$dato->id}}</th>
        <th>{{$dato->marca}}</th>
        <th>{{$dato->descripcion}}</th>
        <th>{{$dato->unidades}}</th>
        <th>{{$dato->precio}}</th>
        <th>{{$dato->categoria}}</th>
        <th>{{$dato->usuario}}</th>
        <th><img src="{{asset('img/'.$dato->imagen)}}" alt=""></th>
        <td><a href="/Empleado/Producto/{{$dato->id}}/edit" class='btn btn-info'>Editar</a></td>
        <td><button class='btn btn-warning'>Eliminar</button></td>
    </tr>
    @endforeach
</tbody>
</table>
<div class='espacio'></div>
<div class='text-center'>
    <a href="/Empleado/Producto/create" class='btn btn-primary'>Crear Nuevo Producto</a>
</div>
@endsection