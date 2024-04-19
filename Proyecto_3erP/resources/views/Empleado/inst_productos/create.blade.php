@extends('layouts.boot')
<head>
    <style>
        #lbl-desc{
            vertical-align: top;
        }
        label{
            font-size: 18px;
            font-weight: 700;
        }
        .titulo{
            font-size: 18px;
            font-weight: 700;
        }
        .btn-primario{
            width: 100px;
            height: 46px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            color: #ffff;
            background-color: #2CA7E8;
            border: 2px solid #2CA7E8;
            margin-top: 14px;
        } 
        .btn-primario:hover{
            background-color: #6FCDFE;
            box-shadow: 0 0 20px rgba(44, 167, 232, 0.8);
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
                        <a href="/Empleado/Producto" class='btn btn-danger float-end'>Atrás</a>
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
                                <legend for='categoria' class="titulo">Categoría:</legend>
                                    <select id="categoria" name='categoria' class='form-control'>
                                        <option>Camisas</option>
                                        <option>Pantalones</option>
                                        <option>Ropa interior</option>
                                        <option>Sueteres</option>   
                                        <option>Formal</option>
                                        <option>Otros</option>
                                    </select>
                            </fieldset>
                        </div>
                        <div class='form-group mb-3'>
                            <fieldset>
                                <legend for='usuario' class="titulo">Usuarios:</legend>
                                    <select id="usuario" name='usuario' class='form-control'>
                                        <option>Bebés</option>
                                        <option>Infantiles</option>
                                        <option>Juveniles</option>
                                        <option>Adultos</option>
                                        <option>Ancianos</option>
                                    </select>
                            </fieldset>
                        </div>
                        <div class='form-group mb-3'>
                            <label for="marca">Marca:</label>
                            <input type="text" name='marca' id='marca' class='form-control'>
                        </div>
                        <div class='form-group mb-3'>
                            <label id='lbl-desc' for="descrpcion">Descripción:</label>
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
                            <button type='submit' class='btn-primario'>Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection