@extends('layouts.boot')

@section('menu')
<style>
    .container {
        margin-top: 20px;
    }

    .container-tabla {
        overflow-x: auto;
    }

    .tabla {
        width: 100%;
        border-collapse: collapse;
    }

    .tabla th {
        padding: 8px;
        text-align: left;
        border-bottom: 4px solid #ddd;
        background-color: #f2f2f2;
        color: #333;
    }

    .btn-primary {
        background-color: #007bff;
        color: #ffff;
        font-weight: 600;
        border: 2px solid #007bff;
        padding: 8px 16px;
        border-radius: 10px;
    }
    .btn-primary:hover {
        background-color: #ffff;
        color: #007bff;
    }
</style>

<div class="container">
    <div class="container-tabla">
        <table class="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Unidades</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Usuario</th>
                    <th>Acción</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($nombres as $nombre)
                <tr>
                    <th>{{$nombre->id}}</th>
                    <th>{{$nombre->nombre}}</th>
                    <th>{{$nombre->marca}}</th>
                    <th>{{$nombre->descripcion}}</th>
                    <th>{{$nombre->unidades}}</th>
                    <th>{{$nombre->precio}}</th>
                    <th>{{$nombre->categoria}}</th>
                    <th>{{$nombre->usuario}}</th>
                    <th>
                        <a href="{{route('cliente.compra', $nombre->id)}}" class="btn btn-primary">Comprar</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
