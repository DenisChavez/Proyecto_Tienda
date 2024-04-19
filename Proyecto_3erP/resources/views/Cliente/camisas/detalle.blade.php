@extends('layouts.boot')

@section('menu')
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: none;
                font-family: 'Quicksand', 'Sand-serif';
            }
            .container{
                width: 100%;
                height: 100dvh;
                display: grid;
                grid-template-rows: 200px auto;
                justify-content: center;
            }
            
            h1 {
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 700;
                margin-top: 14%;
            }
            .containerProducto{
                display: grid;
                width: 100%;
                max-width: 700px;
                height: 400px;
                grid-template-columns: 0.9fr 1fr;
                background-color: #EBF8FF;
                box-shadow: 0 0 30px rgba(44, 167, 232, 1);
                border: 2px solid #2CA7E8;
                border-radius: 20px;
                place-items: center;
            }
            .containerProducto > div > img{
                border-radius: 14px;
                box-shadow: -14px 14px 14px rgba(0, 0, 0, 0.4);
            } 
            .info{
                margin-right: 26px;
            } 
            .containerProducto > div > h2{
                font-weight: 600;
                font-size: 1.7rem;
                text-align: center;
                text-transform: uppercase;
            }  
            
            .containerProducto > div > p > span{
                font-weight: 600;
                font-size: 0.9rem;
                text-transform: uppercase;
            }
            .containerProducto .btn{
                position: relative;
                top: 32px;
                left: 130px;
                margin-left: 6px;
            }  
            .containerProducto .btn-primary{
                background-color: #2CA7E8;
                border: 2px solid #2CA7E8;
            }
              
            .containerProducto .btn-primary:hover{
                background-color: #6FCDFE;
                box-shadow: 0 0 20px rgba(44, 167, 232, 0.8);
            }
            .containerProducto .btn-danger{
                background-color: #F14646;
                border: 2px solid #F14646;
            }
              
            .containerProducto .btn-danger:hover{
                background-color: #F36A6A;
                box-shadow: 0 0 20px rgba(243, 106, 106, 0.8);
            }

            </style>
    </head>
    <div class="container">
        <h1>Detalle de compra</h1>
        <div class="containerProducto">
            <div class="img">
                <img src="{{asset('img/'.$productos->imagen)}}" alt="Producto">
            </div>
            <div class="info">
                <h2 class='item'>{{$productos->nombre}}</h2>
                <p><span>Marca: </span>{{$productos->marca}}</p>
                <p><span>Descripción: </span>{{$productos->descripcion}}</p>
                <p><span>Unidades: </span>{{$productos->unidades}}</p>
                <p><span>Precio: </span>{{$productos->precio}}</p>
                <p><span>Categoría: </span>{{$productos->categoria}}</p>
                @if($productos->unidades == 0)
                    <a href="{{route('cliente.add', $id = $productos->id)}}" style = 'display: none;'><input type="submit" value="Agregar al carrito" class="btn btn-primary"></a>
                @else
                    <a href="{{route('cliente.add', $id = $productos->id)}}"><input type="submit" value="Agregar al carrito" class="btn btn-primary"></a>
                @endif
                <a href="/Cliente"><input type="submit" value="Atrás" class="btn btn-danger"></a>
            </div>
        </div>
    </div>
    
@endsection