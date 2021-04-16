<?php

abstract class Veicolo{

    private $modello;
    private $marca;

    function __construct($marca=null, $modello=null){

        $this -> setMarca($marca);
        $this -> setModello($modello);

    }

    private function setMarca($valore){
        $this -> marca = $valore;
    }
    
    private function setModello($valore){
        $this -> modello = $valore;
    }

    function getModello(){
        return $this -> modello;
    }

    function getMarca(){
        return $this -> marca;
    }

}

class Auto extends Veicolo{
    private $numRuote = 4;

    function getNumRuote(){
        return $this -> numRuote;
    }
}

class Moto extends Veicolo{
    private $numRuote = 2;

    function getNumRuote()
    {
        return $this -> numRuote;
    }
}

$moto = new Moto("Triumph","Speed Triple");
$auto = new Auto("Renault","Captur");

?>