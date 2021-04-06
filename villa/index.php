<?php


echo "Hello World!";


define("V",100);    // costante

$variabile = 1;
echo $variabile;
echo "<br />";
$variabile++;
echo $variabile;
echo "<br />";
$variabile += 3;
echo $variabile;
echo "<br />";

echo V;

$string = "ciao sono una stringa";
echo $string;

$array = array(1,2,3,4,5,6,7,8,9,0);
$arrary2 = [];
echo "<br />";

print_r($array);
print_r($array2);

echo "<br />";
$elementi = [];
$elemento = ["nome" => "Matteo", "cognome" => "Mascellani", "eta" => 45];
$elementi[] = $elemento;
$elemento = ["nome" => "Pippo", "cognome" => "Mascellani", "eta" => 45];
$elementi[] = $elemento;
$elemento = ["nome" => "Luca", "cognome" => "Mascellani", "eta" => 45];
$elementi[] = $elemento;
$elemento = ["nome" => "Marco", "cognome" => "Mascellani", "eta" => 45];
$elementi[] = $elemento;


for ($i=0; $i < 10; $i++) { 
    echo "Numero $i <br />";
}

foreach ($array as $key => $value) {
    echo $key . " " . $value . "<br />";
}