@extends('layouts.boot')
<head>
    <style>
        #lbl-desc{
            vertical-align: top;
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
                            <label for="id">Codigo:</label>
                            <input type="text" name='id' id='id' class='form-control' value="{{$registro->id}}" disabled>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name='nombre' id='nombre' class='form-control' value="{{$registro->nombre}}">
                            </div>
                            <div class='form-group mb-3'>
                            <fieldset>
                            <legend for='categoria'>Categoria:</legend>
                            <select id="categoria" name='categoria' class='form-control'>
                                <option value='camisa'>camisa</option>
                                <option value='pantalon'>pantalon</option>
                                <option value='ropa interior'>ropa interior</option>
                                <option value='sueteres'>sueteres</option>
                                <option value=formal>formal</option>
                                <option value='otros'>otros</option>
                            </select>
                            </fieldset>
                            </div>
                            <div class='form-group mb-3'>
                            <fieldset>
                            <legend for='usuario'>Usuario:</legend>
                            <select id="usuario" name='usuario' class='form-control'>
                                <option value='bebe'>bebe</option>
                                <option value='infantil'>infantil</option>
                                <option value='juvenil'>juvenil</option>
                                <option value='adulto'>adulto</option>
                                <option value='anciano'>anciano</option>
                            </select>
                            </fieldset>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="marca">Marca:</label>
                            <input type="text" name='marca' id='marca' class='form-control' value="{{$registro->marca}}">
                            </div>
                            <div class='form-group mb-3'>
                            <label id='lbl-desc' for="descrpcion">Descripcion:</label>
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
                            <button type='submit' class='btn btn-primary'>Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


@endsection