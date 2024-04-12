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
                    <h4>Productos Agregados al Carrito de Compras
                        <a href="/Empleado" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>
   
                <div class='card-body'>
                    <div class='espacio'></div>
                    <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Unidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <th>{{$producto['elemento']['id']}}</th>
                            <th>{{$producto['elemento']['nombre']}}</th>
                            <th>{{$producto['elemento']['descripcion']}}</th>
                            <th>{{$producto['elemento']['precio']}}</th>
                            <th> {{$producto['elemento']['imagen']}}</th>
                            <th><img src="{{asset('img/'.$dato->imagen)}}" alt=""></th>
                            <th>{{$producto['cant']}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class='espacio'></div>
                    <div class='text-center'>
                        <a href="/Empleado/Producto/create" class='btn btn-primary'>Crear Nuevo Producto</a>
                    </div>
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