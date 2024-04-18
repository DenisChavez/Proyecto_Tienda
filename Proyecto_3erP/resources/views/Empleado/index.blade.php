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
    <div class='text-center'>
        <h1>Menu de Empleados</h1>
        <div class='espacio'></div>
        <a href="/Empleado/Producto"><button class='btn btn-secondary'>Gestionar Productos</button></a>
    </div>
@endsection