<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $nombre = $request->input('nombre');
        $detalle = Producto::where('categoria', $nombre)->get();
        return view('Cliente.camisas.index')->with('nombres',$detalle);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mostrar_carrito()
    {
        //
        if (empty(config('app.carrito'))) 
        {
            return view('Cliente.carrito')->with('productos','puta');
        }
        else
        {
            return view('Cliente.carrito')->with('productos',config('app.carrito'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $id = $request->input('productos');
        $productos = Producto::find($id);
        if (sizeof(config('app.carrito')) != 0) 
        {
            $tmp_carrito = config('app.carrito');
            array_merge($tmp_carrito,$productos);
            config(['app.carrito' => $tmp_carrito]);
        }
        else
        {
            config(['app.carrito' => $productos]);
        }
        return view('Cliente.carrito')->with('productos',config('app.carrito'));
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
        $producto = Producto::find($id);
        return view('Cliente.camisas.detalle')->with('productos', $producto);
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
