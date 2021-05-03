<?php

echo"Hello!";
echo "<br />";

$v = 1;
echo $v;
echo "<br />";
$v++;
echo $v;
echo "<br />";
$v += 3;
echo $v;
echo "<br />";
$v = $v + 3;
echo $v;
echo "<br />";

define("V", 10);
echo V + 1;
echo "<br />";

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
echo ROOT;
echo "<br />";

$stringa = "Ciao sono una stringa";
echo $stringa;
echo "<br />";
echo "<pre>";
$array = array(1,2,3,4,5,6,7);
echo "array 1 =";
print_r($array);
var_dump($array);
echo "<br />";
echo "<pre>";
$array2 = [1,2,3,4,5,6,7];
echo "array 2 =";
print_r($array2);
var_dump($array2);
echo "<br />";
echo "<pre>";
$array3 = ["nome"=>"Leonardo", "cognome" => "Garuti", "età" => 22];
print_r($array3);
var_dump($array3);

$elementi = [];
$elemento = ["nome"=>"Leonardo", "cognome" => "Garuti", "età" => 22];
$elementi[] = $elemento;
$elemento = ["nome"=>"Matteo", "cognome" => "Mascellani", "età" => 45];
$elementi[] = $elemento;
$elemento = ["nome"=>"Mario", "cognome" => "Rossi", "età" => 40];
$elementi[] = $elemento;
print_r($elementi);