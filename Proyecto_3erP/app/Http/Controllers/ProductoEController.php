<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Producto::all();
        return view("Empleado.inst_productos.index")->with('datos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("Empleado.inst_productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Producto();
        $registro->nombre=$request->get('nombre');
        $registro->categoria=$request->get('categoria');
        $registro->usuario=$request->get('usuario');
        $registro->marca=$request->get('marca');
        $registro->descripcion=$request->get('descripcion');
        $registro->precio=$request->get('precio');
        $registro->unidades=$request->get('unidades');
        if($request->hasfile('imagen'))
        {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/',$filename);
            $registro->imagen = $filename;
        }
        $registro->save();
        return( redirect('/Empleado/Producto'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
