<?php

namespace Matteo\Controllers;

use Matteo\Models\Persona;

class PersonaController {

    static function getPersone()  {
        $persone = new Persona();
        return $persone -> getPersone();
    }

    static function getPersona($name) {

        $items = self::getPersone();
        foreach($items as $item) {
            if($item["name"] == $name) {
                return $item;
            }
        }

    }
}