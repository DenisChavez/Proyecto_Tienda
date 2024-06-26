@extends('layouts.boot')

@section('menu')
<style>
    .espacio{
        height: 50px;
    }
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
        background-color: #2CA7E8;
        border: 2px solid #2CA7E8;
        color: #ffff;
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 10px;
    }
    .btn-primary:hover{
        background-color: #6FCDFE;
        border: 2px solid #2CA7E8;
        box-shadow: 0 0 20px rgba(44, 167, 232, 0.8);
    }
    .btn-danger{
        position: relative;
        right: 39.5%;
        background-color: #F14646;
        border: 2px solid #F14646;
    }
              
    .btn-danger:hover{
        background-color: #F36A6A;
        border: 2px solid #F14646;
        box-shadow: 0 0 20px rgba(243, 106, 106, 0.8);
    }

</style>
<div class='espacio'></div>
    <div class='text-center'>
        <a href="/Cliente" class='btn btn-danger'>Atrás</a>
    </div>
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
                    <th></th>
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
