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

for ($i = 0; $i < 10; $i++) {
    echo "number $i <br/>";
    echo "number" . $i . "<br/>";
    echo "numero $i " . $elementi[1]["nome"] . "<br/>";
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