@extends('layouts.boot')

@section('menu')
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Cliente.css">
</head>
<header>
    <div class='espacio'></div>
    <a href="{{route('logout')}}"><img src="img/logout.png" alt="Logout" class='user'></a>
    <a href="{{route('cliente.carro')}}"><img src="img/carrito-de-compras.png" alt="Carrito" class='carrito'></a>
    <h1>Tienda de Ropa</h1>
 </header>
<body>
    <h2>Productos</h2>
<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'camisa']) }}">
            <li class="category">
                <img src="img/camisas.jpg" alt="camisas" class="img-cat">
                <p class="title-cat">Camisas</p>
                <p class="p-cat">Prendas superiores de manga corta, larga o sin manga, pueden tener botones con cuello.</p>
            </li>
        </a>

        <a href="{{ route('cliente.producto', ['nombre' => 'pantalon']) }}"> 
            <li class="category">
                <img src="img/pantalones.PNG" alt="pantalones" class="img-cat">
                <p class="title-cat">Pantalones</p>
                <p class="p-cat">Prendas inferiores que cubren las piernas, incluimos faldas y shorts</p>    
            </li>
        </a>
    </ul>  
</div>

<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'ropa interior']) }}">
            <li class="category">
                <img src="img/ropa_interior.jpg" alt="ropa interior" class="img-cat">
                <p class="title-cat">Ropa Interior</p>
                <p class="p-cat">Todo tipo de ropa interior para mujeres y para hombres</p>
               
            </li>
        </a>
        <a href="{{ route('cliente.producto', ['nombre' => 'sueteres']) }}"> 
            <li class="category">
                <img src="img/sueter.jpg" alt="sueteres" class="img-cat">
                <p class="title-cat">Sueteres</p>
                <p class="p-cat">Todo tipo de sueteres y chumpas de diferentes estilos</p>    
            </li>
        </a>
    </ul>  
</div>
<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'formal']) }}">
            <li class="category">
                <img src="img/vestido.jpg" alt="Ropa formal" class="img-cat">
                <p class="title-cat">Formal</p>
                <p class="p-cat">Prendas formales incluidos los sacos y los vestidos</p>
               
            </li>
        </a>
        <a href="{{ route('cliente.producto', ['nombre' => 'otros']) }}"> 
            <li class="category">
                <img src="img/otro.jpg" alt="Otros tipos de ropa" class="img-cat">
                <p class="title-cat">Otros</p>
                <p class="p-cat">Otros tipos de ropa</p>    
            </li>
        </a>
    </ul>  
</div>
</body>
<footer></footer>
@endsection
</html>