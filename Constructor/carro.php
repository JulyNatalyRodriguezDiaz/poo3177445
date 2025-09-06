<?php

class carro{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $puestos;


    // public function __construct()
    // {
    //     $this->color = "rojo";
    //     $this->marca = "ferrari";
    //     $this->modelo = "gallargo";
    //     $this->velocidad = 500;
    //     $this->caballaje = 300;
    //     $this->puestos = 2;
    // }

        public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $puestos)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->puestos = $puestos;
    }

}