@extends('layouts.boot')
<head>
    <style>
        #lbl-desc{
            vertical-align: top;
        }
    </style>
</head>
@section('menu')
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Crear Producto
                        <a href="/Empleado/Producto" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>

                <div class='card-body'>
                <form action="/Empleado/Producto" method='POST' enctype="multipart/form-data">
                            @csrf
                            <div class='form-group mb-3'>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name='nombre' id='nombre' class='form-control'>
                            </div>
                            <div class='form-group mb-3'>
                            <fieldset>
                            <legend for='categoria'>Categoria:</legend>
                            <select id="categoria" name='categoria' class='form-control'>
                                <option>camisa</option>
                                <option>pantalon</option>
                                <option>ropa interior</option>
                                <option>sueteres</option>
                                <option>formal</option>
                                <option>otros</option>
                            </select>
                            </fieldset>
                            </div>
                            <div class='form-group mb-3'>
                            <fieldset>
                            <legend for='usuario'>Usuario:</legend>
                            <select id="usuario" name='usuario' class='form-control'>
                                <option>bebe</option>
                                <option>infantil</option>
                                <option>juvenil</option>
                                <option>adulto</option>
                                <option>anciano</option>
                            </select>
                            </fieldset>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="marca">Marca:</label>
                            <input type="text" name='marca' id='marca' class='form-control'>
                            </div>
                            <div class='form-group mb-3'>
                            <label id='lbl-desc' for="descrpcion">Descripcion:</label>
                            <textarea id="descripcion" name='descripcion' cols="90" rows="4" class='form-control'></textarea>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="precio">Precio:</label>
                            <input type="text" name='precio' id='precio' class='form-control'>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="unidades">Unidades:</label>
                            <input type="number" name='unidades' id='unidades' class='form-control'>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="imagen">Imagen:</label>
                            <input type="file" name='imagen' id='imagen' class='form-control'>
                            </div>
                            <div class='form-group mb-3'>
                            <button type='submit' class='btn btn-primary'>Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection