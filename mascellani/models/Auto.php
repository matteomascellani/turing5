<?php

namespace Matteo\Models;

class Auto extends Veicolo {

    private $numRuote = 4;

    function getNumRuote() {

        return $this -> numRuote;
    }

}