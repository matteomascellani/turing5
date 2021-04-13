<?php

//variabili

$variabile = 1;
echo $variabile;

$variabile++;
echo $variabile;
echo "<br></br>";

$stringa = "Ci son due coccodrilli";
$stringa .= "ed un orangotango";
echo $stringa;
echo "<br></br>";

$el = "25";
$el2 = 25;
(int)$el;
$sum = $el + $el2;
echo $sum;
echo "<br/ >";

//arrays

$animali = [];

$animale = [
   "nome scientifico" => "Gallus Gallus Domesticus",
   "nome comune" => "Pollo",
   "gambe" => 2
];

$animali[] = $animale;
echo "<br/ >";

$animale = [
    "nomme scientifico" => "Canis lupus familiaris",
    "nome comune" => "Cane",
    "gambe" => 4
];
$animali[] = $animale;
echo "<pre>";
print_r($animali);
echo "</pre>";

//for loop
for ($i = 0; $i < 10; $i++) {
    echo "number  $i  <pre>";
    echo "number" . $i . "<pre>";
    echo "numero $i " . $animali[0]["nome scientifico"] . "<pre></pre>";
};

//classi ed oggetti

class Animal{
    public $name;

    function setName($val){
        $this -> name = $val;
    }
}

$animal = new Animal;
$animal -> name = "Pollo";
echo "<pre>";
print_r($animal);
echo "</pre>";

$animal ->setName("Gallus gallus domesticus");
echo "<pre>";
print_r($animal);
echo "</pre>";

