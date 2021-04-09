<?php

echo "Hello World<br/>";
$variabile = 1;
echo $variabile. "<br />";
$variabile += 1;
echo $variabile. "<br />";
$variabile += 3;
echo $variabile. "<br/ >";

//Cosi si può sommare con una stringa che contiene al suo interno un numero
//prende in considerazione solo quel numero e ne fa il cast, e poi la somma come in questo caso
$stringa = "200 Questa è una stringa";
echo (int)$stringa + 1;

//Array
//ci sono due metodi per crearli
//metodo 1:
$array1 = array(1,2,3,4,5,6,7);

//metodo 2:
$array2 = [1, 2, 3, 4, 5, 6 ,7];

//e anche 2 metodi per stampare tutti gli elementi senza ciclo for
//metodo var_dump()
var_dump($array1);
echo "<br/ >";
//metodo print_r()
print_r($array2);

//ciclo for
echo "for <br/>";

for ($i = 0; $i < 10; $i++) 
{
    echo "number" . $i . "<br/>";
}


//Programmazione ad oggetti
class Persona {

    private $name;

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
?>


<?php

//Determina se una variabile a diversa da null
//An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
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

        $this->modello = $modello;
        $this->marchio = $marchio;

    }

    function getModello() {
        return $this -> modello;
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


<!-- //require_once() 
serve per richiamare file di models e controller che mi servono nella views
-->