<?php

namespace App;

class Carro
{
    public $elementos = null;
    public $total_cant = 0;
    public $total_precio = 0;
    
    public function __construct($anterior){
        if($anterior){
            $this->elementos = $anterior->elementos;
            $this->total_cant = $anterior->total_cant;
            $this->total_precio = $anterior->total_precio;
        }
    }

    public function add($elementos, $id){
        $almacen = ['cant' => 0, 'precio' => $elementos->precio, 'elemento' => $elementos];
        if($this->elementos){
            if(array_key_exists($id, $this->elementos)){
                $almacen = $this->elementos[$id];
            }
        }
        $almacen['cant']++;
        $almacen['precio'] = $elementos->precio * $almacen['cant'];
        $this->elementos[$id] = $almacen;
        $this->total_cant++;
        $this->total_precio += $elementos->precio;
    }
}
