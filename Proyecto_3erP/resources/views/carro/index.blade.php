@extends('layouts.boot')
<head>
<style>
    .espacio{
      height: 60px;
    }
    img{
        max-height: 50px;
    }
              
    .btn-primary:hover{
        box-shadow: 0 0 20px rgba(34, 105, 247, 0.8);
    }   
    .btn-danger:hover{
        background-color: #F36A6A;
        box-shadow: 0 0 20px rgba(243, 106, 106, 0.8);
    }
  </style>
</head>
@section('menu')
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Productos agregados al carrito de compras
                        <a href="/Cliente" class='btn btn-danger float-end'>Atrás</a>
                    </h4>
                </div>
   
                <div class='card-body'>
                    <div class='espacio'></div>
                    @if(Session::has('carro'))
                    <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Unidades</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <th>{{$producto['elemento']['id']}}</th>
                            <th>{{$producto['elemento']['nombre']}}</th>
                            <th>{{$producto['elemento']['descripcion']}}</th>
                            <th>{{$producto['elemento']['precio']}}</th>
                            <th><img src="{{asset('img/'.$producto['elemento']['imagen'])}}" alt=""></th>
                            <th>{{$producto['cant']}}</th>
                            <th><a href="{{route('cliente.del', $id = $producto['elemento']['id'])}}" class='btn btn-warning'>Eliminar</a></th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <h5>Precio Total: {{$total_precio}}</h5>
                    <div class='espacio'></div>
                    <div class='text-center'>
                        <a href="{{route('cliente.comprar')}}" class='btn btn-primary'>Comprar</a>
                    </div>
                    @else
                    <div class='text-center'>
                        <h5>No ha seleccionado nada. Por favor navegue por nuestra tienda, gracias.</h5>
                    </div>
                    @endif
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