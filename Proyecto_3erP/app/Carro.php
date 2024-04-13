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

    public function add($elemento, $id){
        $almacen = ['cant' => 0, 'precio' => $elemento->precio, 'elemento' => $elemento];
        if($this->elementos){
            if(array_key_exists($id, $this->elementos)){
                $almacen = $this->elementos[$id];
            }
        }
        $almacen['cant']++;
        $almacen['precio'] = $elemento->precio * $almacen['cant'];
        $this->elementos[$id] = $almacen;
        $this->total_cant++;
        $this->total_precio += $elemento->precio;
    }

    public function eliminar($id){
        $this->elementos[$id]['cant']--;
        $this->elementos[$id]['precio'] -= $this->elementos[$id]['elemento']['precio'];
        $this->total_cant--;
        $this->total_precio -= $this->elementos[$id]['elemento']['precio'];

        if($this->elementos[$id]['cant'] <= 0){
            unset($this->elementos[$id]);
        }
    }
}
