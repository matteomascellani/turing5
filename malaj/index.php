<?php

// Per importare un file require_once("percorsofile.file")
// Solitamente si fa un require_once() di un file detto loader che ci carica tutti i file richieste (specialmente per impostare librerie, framwork ,ecc)

//esistono anche i namespace

namespace PrimaProva;

// use NomeNamespace\NomeClasse per richiemare una certa classe di un certo Namespace

// Costante (è una funzione che definisce una costante)
define("V", 100);

// variabili e print
$v = 1;
echo $v;
$v ++;
echo "<br />";
echo $v;

$v += 3;
echo "<br />";
echo $v;

echo "<br />";
echo V;
//stringe 
$string = "200 - Ciao, sono una stringa";

echo "<br />";
echo $string . " 1";
//cast in int
echo "<br />";
echo (int)$string + 1;
echo "<br />";
//array
$array = array("1", 1, 2, 5, 4);
$array2 = [1,2,3,8,4,6];

print_r($array);
echo "<br />";

$array3 = [ "Nome" => "Alexandro" , "Cognome" => "Burgagni" , "Età" => 26 ];
// ciclo for
for($i=0; $i<10; $i++){
    echo "Numero " . $i . "<br />";
};

echo "<br />";
//ciclo forEach output in k:v
foreach($array2 as $k => $numero)
{
    $numero += 5;
    echo $k . "-" . $numero;
}

//Oggetti e Classi

//$object = new StdClass;
$object = new Persona("Ale","Bur");
//"name" diventa un attributo dell'oggetto ed "Alex" è la sua valorizzazione
$object->name =  "Alex";

class Persona {
    public $name;
    public $surname;

    //costrtuttore
    function __construct($nome, $cognome)
    {
        $this->setName($nome);
        $this->setSurename($cognome);
    }

    function setName($valore) {
        $this -> name = $valore;
    }

    function setSurename($valore) {
        $this -> surname = $valore;
    }
};

$persona = new Persona("Andrea", "Mascellani");
$persona->name = "Andrea";

echo "<br />";
print_r($persona);

echo "<br />";
print_r($object);


//ereditarietà
class Figlio extends Persona{

}

//classe astratta
abstract class Veicolo{

}