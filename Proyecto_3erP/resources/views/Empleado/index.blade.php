@extends('layouts.boot')
<head>
<style>
    a {
      text-decoration: none;
      color: inherit;
    }
    .espacio{
      height: 60px;
    }
    .btn{
      height: 20%;
      width: 20%;
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
        <h1>Menu de Empleados</h1>
        <div class='espacio'></div>
        <a href="/Empleado/Producto"><button class='btn btn-secondary'>Gestionar Productos</button></a>
    </div>
@endsection