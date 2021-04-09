<?php

namespace Matteo\Models;

abstract class Veicolo {

    private $modello;
    private $marchio;

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