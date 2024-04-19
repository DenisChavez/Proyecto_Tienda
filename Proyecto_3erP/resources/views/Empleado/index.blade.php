@extends('layouts.boot')
<head>
<style>
    *{
      font-family: 'Quicksand', 'Sand-serif';
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    .espacio{
      height: 60px;
    }
    .Menu-Empleado{
      margin-bottom: 100px;
    }
    .btn-secundario{
      width: 230px;
      height: 230px;
      background-image: url('data:image/png;base64,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');
      border: 2px solid #79EA3D;
      border-radius: 50%;
      filter: drop-shadow(0 0 20px rgba(121, 234, 61, 0.4));
    }
    .btn-secundario:hover{
      width: 230px;
      height: 230px;
      border: 2px solid #79EA3D;
      filter: drop-shadow(0 0 30px rgba(121, 234, 61, 0.7));
    }
  </style>
</head>
@section('menu')
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Cliente.css">
</head>
<header>
    <div class='espacio'></div>
    <a href="{{route('logout')}}"><img src="img/logout.png" alt="Logout" class='user'></a>
 </header>
    <div class='text-center'>
        <h1 class="Menu-Empleado">Empleados</h1>
        <div class='espacio'></div>
        <a href="/Empleado/Producto"><button class='btn-secundario'></button></a>
    </div>
@endsection