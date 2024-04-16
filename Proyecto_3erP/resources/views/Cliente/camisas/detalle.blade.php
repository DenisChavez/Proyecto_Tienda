@extends('layouts.boot')

@section('menu')
    <head>
        <style>
            
            h1 {
                text-align: center;
                margin-bottom: 100px;
            }
            .container{
                width: 100%;
                height: 100vh;
            }
            .container-flex{
                background: papayawhip;
                width: 400px;
                height: auto;
                padding: 20px;
                box-sizing: border-box;
                display: flex;
                justify-content: space-around;
                align-items: center;
                position: relative;
                left: 32%;
                border-radius: 6px;
                border: 1px solid black;
            }
            .container-flex div img{
                height: 200px;
                background: white;
                object-fit: cover;
            }
            .container-flex .info h2{
                text-align: center;
            }
            .container-flex .info p > span{
                font-weight: 700;
                font-size: 14px;
            }
        </style>
    </head>
    <div class="container">
        <h1>Detalle de compra</h1>
        <div class="container-flex">
            <div class="img">
                <img src="{{$productos->imagen}}" alt="">
            </div>
            <div class="info">
                <h2 class='item'>{{$productos->nombre}}</h2>
                <p><span>Marca: </span>{{$productos->marca}}</p>
                <p><span>Descripción: </span>{{$productos->descripcion}}</p>
                <p><span>Unidades: </span>{{$productos->unidades}}</p>
                <p><span>Precio: </span>{{$productos->precio}}</p>
                <p><span>Categoría: </span>{{$productos->categoria}}</p>
                <input type="submit" value="Comprar producto" class="btn btn-primary">
            </div>
        </div>
    </div>
    
@endsection