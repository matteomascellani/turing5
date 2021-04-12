<?php

class Veicolo{
    
    function setName($valore) {
        if(is_integer($valore)) {
            $this -> name = $valore;
        }
    }

    function getName() {
        return $this -> name;
    }


}


class Persona {

    private $name;
    private $surname;

    function setName($valore) {
        if(is_integer($valore)) {
            $this -> name = $valore;
        }
    }

    function getName() {
        return $this -> name;
    }

}




$persona = new Persona();
$persona->setName(5);
echo $persona->getName();