@extends('layouts.boot')

@section('menu')
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Cliente.css">
</head>
<header>
    <div class='espacio'></div>
    <img src="img/menu.png" alt="Menu" class='menu'>
    <img src="img/usuario.png" alt="Usuario" class='user'>
    <a href="Cliente/Producto/mostrar"><img src="img/carrito-de-compras.png" alt="Carrito" class='carrito'></a>
    <h1>Tienda de Ropa</h1>
 </header>
<body>
    <h2>Categorias</h2>
<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'camisa']) }}">
            <li class="category">
                <img src="img/camisas.jpg" alt="camisas" class="img-cat">
                <p class="title-cat">camisas</p>
                <p class="p-cat">Prendas superiores de manga corta, larga o sin manga, pueden tener botones con cuello</p>
            </li>
        </a>
        <a href="{{ route('cliente.producto', ['nombre' => 'pantalon']) }}"> 
            <li class="category" style="margin-left: -20%;">
                <img src="img/pantalones.PNG" alt="pantalones" class="img-cat">
                <p class="title-cat">pantalones</p>
                <p class="p-cat">Prendas inferiores que cubren las piernas, incluimos faladas y shorts</p>    
            </li>
        </a>
    </ul>  
</div>
<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'camisa']) }}">
            <li class="category">
                <img src="img/camisas.jpg" alt="camisas" class="img-cat">
                <p class="title-cat">camisas</p>
                <p class="p-cat">Prendas superiores de manga corta, larga o sin manga, pueden tener botones con cuello</p>
               
            </li>
        </a>
        <a href="{{ route('cliente.producto', ['nombre' => 'pantalon']) }}"> 
            <li class="category" style="margin-left: -20%;">
                <img src="img/pantalones.PNG" alt="pantalones" class="img-cat">
                <p class="title-cat">pantalones</p>
                <p class="p-cat">Prendas inferiores que cubren las piernas, incluimos faladas y shorts</p>    
            </li>
        </a>
    </ul>  
</div>
<div class="list">
    <ul>
        <a href="{{ route('cliente.producto', ['nombre' => 'camisa']) }}">
            <li class="category">
                <img src="img/camisas.jpg" alt="camisas" class="img-cat">
                <p class="title-cat">camisas</p>
                <p class="p-cat">Prendas superiores de manga corta, larga o sin manga, pueden tener botones con cuello</p>
               
            </li>
        </a>
        <a href="{{ route('cliente.producto', ['nombre' => 'pantalon']) }}"> 
            <li class="category" style="margin-left: -20%;">
                <img src="img/pantalones.PNG" alt="pantalones" class="img-cat">
                <p class="title-cat">pantalones</p>
                <p class="p-cat">Prendas inferiores que cubren las piernas, incluimos faladas y shorts</p>    
            </li>
        </a>
    </ul>  
</div>
</body>
<footer></footer>
@endsection
</html>