<?php

/////////////////////////////////////////////////////////////

// Variabili

echo "<h1>Variabili</h1>";

$variable = 1;
echo $variable;
echo "<br><br>";

$variable++;
echo $variable;
echo "<br><br>";

$variable += 3;
echo $variable;
echo "<br><br>";

$variable = $variable + 1;
echo $variable;
echo "<br><br>";

$stringa = "700 Hello World!";
echo (int)$stringa + 1;

/////////////////////////////////////////////////////////////

// Costanti

echo "<h1>Costanti</h1>";

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

echo ROOT;

/////////////////////////////////////////////////////////////

// Array

echo "<h1>Array</h1>";

$array = array("1,2,3");
$array2 = [1, 2, 3, 4];

var_dump($array);
echo "<br><br>";

print_r($array2);

/////////////////////////////////////////////////////////////

// Array associativo

echo "<h1>Array associativo</h1>";

$elementi = [];

$elemento = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "età" => "49"
];

$elementi[] = $elemento;

var_dump($elementi);

$elemento = ["nome" => "Tulio", "cognome" => "Verdi", "età" => "46"];
$elementi[] = $elemento;

echo "<br><br>";

var_dump($elementi);

$elementi[1]["nome"] = "Giovanni";

echo "<br><br>";

var_dump($elementi);

/////////////////////////////////////////////////////////////

// for loop

echo "<h1>for loop</h1>";

for ($i = 0; $i < 10; $i++) {
    echo "number $i <br>";
    echo "number" . $i . "<br>";
    echo "numero $i " . $elementi[1]["nome"] . "<br><br>";
}

/////////////////////////////////////////////////////////////

// Operatore di concatenazione

echo "<h1>Operatore di concatenazione</h1>";

echo "<select>";

for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, 4, 2021); $i++) {
    echo "<option value='$i'>$i</option>";
}

echo "</select>";

/////////////////////////////////////////////////////////////

// Recap

echo "<h1>Recap</h1>";

echo "recap";
echo "<br>";
echo "<br>";
echo "<br>";

$elenco = [
    1,
    2,
    3,
    4,
    5
];

print_r($elenco);

echo "<br><br>";

echo $elenco[2];

echo "<br><br>";

foreach ($elenco as $k => $v) {
    echo $k . " " . $v . "<br><br>";
}

$ago = "A tutti ciao!";

echo strstr($ago, "ciao");

/////////////////////////////////////////////////////////////

// Classi ed oggetti

echo "<h1>Classi ed oggetti</h1>";

$object = new StdClass;

$object->name = "Jason";

print_r($object);

class Persona
{
    public $name;

    function setName($valore)
    {
        $this->name = $valore;
    }
}

$persona = new Persona;
$persona->name = "Alberto";
echo "<pre>";
print_r($persona);
echo "</pre>";

$persona->setName("Mariagrazia");
echo "<pre>";
print_r($persona);
echo "</pre>";

/////////////////////////////////////////////////////////////