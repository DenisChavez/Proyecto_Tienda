<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Carro;
use Session;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function agregar_carro(Request $request,string $id)
    {
        //
        $producto = Producto::find($id);
        $anterior = Session::has('carro') ? Session::get('carro') : null;
        $carro = new Carro($anterior);
        $carro->add($producto, $producto->id);
        $request->session()->put('carro',$carro);
        if($carro->elementos[$id]['cant'] > $producto->unidades){
            return redirect()->route('cliente.del',['id' => $id]);
        }
        return(redirect('/Cliente'));
    }

    public function eliminar(string $id)
    {
        //
        $anterior = Session::has('carro') ? Session::get('carro') : null;
        $carro = new Carro($anterior);
        $carro->eliminar($id);

        if(count($carro->elementos) > 0){
            Session::put('carro',$carro);
        }
        else{
            Session::forget('carro');
        }
        
        return(redirect('/Cliente/carro'));
    }        

    public function mostrar_carro()
    {
        //
        if(!Session::has('carro')){
            return view('carro.index');
        }
        $anterior = Session::get('carro');
        $carro = new Carro($anterior);
        return view('carro.index')->with('productos',$carro->elementos)->with('total_precio',$carro->total_precio);
    }

    public function comprar()
    {
        //
        $anterior = Session::get('carro');
        $carro = new Carro($anterior);
        $productos = $carro->elementos;
        foreach($productos as $producto){
            $registro = Producto::find($producto['elemento']['id']);
            $registro->unidades= $producto['elemento']['unidades'] - $producto['cant'] ;
            $registro->save();
        }
        Session::forget('carro');
        return( redirect('/Cliente'));
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


}
