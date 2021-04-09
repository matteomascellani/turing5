<?php

namespace Matteo\Models;

class Persona {

    private $persone = [
        ["name"=>"Matteo",
        "surname"=>"Mascellani"],
        ["name"=>"Marco",
        "surname"=>"Simoni"],
        ["name"=>"Chiara",
        "surname"=>"Rossi"],
    ];

    function getPersone() {
        return $this->persone;
    }
}