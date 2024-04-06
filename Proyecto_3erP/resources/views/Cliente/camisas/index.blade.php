@extends('layouts.boot')

@section('menu')
<body>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Unidades</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Usuario</th>
        </thead>

        <tbody>
            @foreach($nombres as $nombre)
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
            @endforeach
        </tbody>
    </table>
    <script>"alert('hola');"</script>
</body>
@endsection