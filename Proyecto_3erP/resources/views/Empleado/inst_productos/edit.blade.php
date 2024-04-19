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
<body onload="changeselected()">
<script>
        const changeselected = () =>{
        const selectc = document.querySelector('#categoria');
        const selectu = document.querySelector('#usuario');
        selectc.value = "{{$registro->categoria}}";
        selectu.value = "{{$registro->usuario}}";
    }
</script>
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Editar Producto
                        <a href="/Empleado/Producto" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>

                <div class='card-body'>
                    <form action="/Empleado/Producto/{{$registro->id}}" method='POST'>
                        @csrf
                        @method('PUT')
                        <div class='form-group mb-3'>
                            <label for="id">Código:</label>
                            <input type="text" name='id' id='id' class='form-control' value="{{$registro->id}}" disabled>
                        </div>
                        <div class='form-group mb-3'>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name='nombre' id='nombre' class='form-control' value="{{$registro->nombre}}">
                        </div>
                        <div class='form-group mb-3'>
                            <fieldset>
                                <legend for='categoria' class="titulo">Categoría:</legend>
                                <select id="categoria" name='categoria' class='form-control'>
                                    <option value='Camisas'>Camisas</option>
                                    <option value='Pantalones'>Pantalones</option>
                                    <option value='Ropa interior'>Ropa interior</option>
                                    <option value='Sueteres'>Sueteres</option>
                                    <option value='Formal'>Formal</option>
                                    <option value='Otros'>Otros</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class='form-group mb-3'>
                            <fieldset>
                                <legend for='usuario' class="titulo">Usuarios:</legend>
                                <select id="usuario" name='usuario' class='form-control'>
                                    <option value='bebe'>Bebés</option>
                                    <option value='infantil'>Infantiles</option>
                                    <option value='juvenil'>Juveniles</option>
                                    <option value='adulto'>Adultos</option>
                                    <option value='anciano'>Ancianos</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class='form-group mb-3'>
                            <label for="marca">Marca:</label>
                            <input type="text" name='marca' id='marca' class='form-control' value="{{$registro->marca}}">
                        </div>
                        <div class='form-group mb-3'>
                            <label id='lbl-desc' for="descrpcion">Descripción:</label>
                            <textarea id="descripcion" name='descripcion' cols="90" rows="4" class='form-control'>{{$registro->descripcion}}</textarea>
                        </div>
                        <div class='form-group mb-3'>
                            <label for="precio">Precio:</label>
                            <input type="text" name='precio' id='precio' class='form-control' value="{{$registro->precio}}">
                        </div>
                        <div class='form-group mb-3'>
                            <label for="unidades">Unidades:</label>
                            <input type="number" name='unidades' id='unidades' class='form-control' value="{{$registro->unidades}}">
                        </div>
                        <div class='form-group mb-3'>
                            <button type='submit'  class='btn-primario'>Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


@endsection