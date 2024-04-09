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

@php
$array = true;
if ($productos instanceof ArrayAccess || is_array($productos)) {
    foreach ($productos as $element) {
            if (is_array($element)) {
                $array = false;
            }
        }
        $array = true;
    }
    $array = false;

@endphp

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Carrito de Compras
                        <a href="/Cliente" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>
   
                <div class='card-body'>
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
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    @if($productos == 'puta' )

                    @elseif($array === false )
                    <tbody>
                        <tr>
                            <th>{{$productos->id}}</th>
                            <th>{{$productos->marca}}</th>
                            <th>{{$productos->descripcion}}</th>
                            <th>{{$productos->unidades}}</th>
                            <th>{{$productos->precio}}</th>
                            <th>{{$productos->categoria}}</th>
                            <th>{{$productos->usuario}}</th>
                            <td><a href="/Empleado/Producto/{{$productos->id}}/edit" class='btn btn-info'>Editar</a></td>
                            <td>
                                <form action="/Empleado/Producto/{{$productos->id}}" method='POST'>
                                    @csrf
                                    @method('Delete')
                                    <button onclick='return seguro();' type='submit' class='btn btn-warning'>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @else
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <th>{{$producto->id}}</th>
                            <th>{{$producto->marca}}</th>
                            <th>{{$producto->descripcion}}</th>
                            <th>{{$producto->unidades}}</th>
                            <th>{{$producto->precio}}</th>
                            <th>{{$producto->categoria}}</th>
                            <th>{{$producto->usuario}}</th>
                            <td><a href="/Empleado/Producto/{{$producto->id}}/edit" class='btn btn-info'>Editar</a></td>
                            <td>
                                <form action="/Empleado/Producto/{{$producto->id}}" method='POST'>
                                    @csrf
                                    @method('Delete')
                                    <button onclick='return seguro();' type='submit' class='btn btn-warning'>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                    </table>
                    <div class='espacio'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function seguro(){
        var confirma = confirm('Esta seguro de que quiere eliminar?');
        return confirma;
    }
</script>
@endsection