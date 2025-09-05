<?php
//clase: molde pra crear mas objetos

class Carro{
    //atributos o propiedades (variable)
    public $color = "rojo";
    public $marca = "ferrari";
    public $modelo = "aventador";
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    //metodo -> acciones que hace el carro(funciones)

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }

    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }


}

//crear el objeto
$carroespecial = new Carro();

// var_dump($carroespecial);
echo 'la velocidad de mi carro es:' .$carroespecial->getVelocidad().'<br>';
echo 'el color de mi carro es: '.$carroespecial->getColor().'<br>';

$carroespecial -> setColor("amarillo");
echo $carroespecial->getColor()."<br>";

$carroespecial -> acelerar();
echo 'la velocidad de mi carro es:' .$carroespecial->getVelocidad().'<br>';

$carroespecial -> acelerar();
$carroespecial -> acelerar();
$carroespecial -> acelerar();
$carroespecial -> acelerar();
echo 'la velocidad de mi carro es:' .$carroespecial->getVelocidad().'<br>';
$carroespecial -> frenar();
$carroespecial -> frenar();
echo 'la velocidad de mi carro es:' .$carroespecial->getVelocidad().'<br>';
