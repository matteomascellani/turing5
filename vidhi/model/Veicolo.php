<?php

abstract class Veicolo {

     public $modello;
     public $marchio;

    function __construct($modello=null, $marchio=null) {

        $this->setModello($modello);
        $this->setMarchio($marchio);

    }

    private function setModello($valore) {
        $this -> modello = $valore;
    }

    function getModello() {
        return $this -> modello;
    }

    private function setMarchio($valore) {
        $this -> marchio = $valore;
    }

    function getmarchio() {
        return $this -> marchio;
    }
}
class Auto extends Veicolo {

    private $numRuote = 4;

    function getNumRuote() {

        return $this -> numRuote;
    }

}
class Moto extends Veicolo {

    private $numRuote = 2;

    function getNumRuote() {

        return $this -> numRuote;
    }

}