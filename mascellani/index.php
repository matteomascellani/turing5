<?php


if(isset($_REQUEST["name"])) {
    $name = $_REQUEST["name"];
} else {
    $name = null;
}

echo $name;

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

class PersonaModel {

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

class PersonaController {

    static function getPersone()  {
        $persone = new PersonaModel();
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



//VISTA
$items = PersonaController::getPersone();

$item = PersonaController::getPersona($name);

print_r($item);
?>


<div>Lista persone</div>

<?php if(isset($item["name"])): ?>
<ul>
<li><?php echo $item["name"] . " " . $item["surname"]; ?></li>
</ul>
<?php endif; ?>

<ul>
<?php foreach($items as $item): ?>
<li><?php echo $item["name"] . " " . $item["surname"]; ?></li>
<?php endforeach; ?>
</ul>

<select>
<?php foreach($items as $item): ?>
<option><?php echo $item["name"] . " " . $item["surname"]; ?></option>
<?php endforeach; ?>
</select>