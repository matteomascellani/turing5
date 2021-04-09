<?php

namespace Matteo\Models;

class Moto extends Veicolo {

    private $numRuote = 2;

    function getNumRuote() {

        return $this -> numRuote;
    }

}