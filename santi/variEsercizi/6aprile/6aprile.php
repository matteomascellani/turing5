<?php

define("ROOT",$_SERVER["DOCUMENT_ROOT"]);


$variable = 1;
echo $variable;
echo "<br />";

$variable++;
echo $variable;
echo "<br />";

$variable += 3;
echo $variable;
echo "<br />";

$variable = $variable + 1;
echo $variable;
echo "<br />";

$stringa = "2000 pippi";
echo (int)$stringa + 1;
echo "<br />";

echo ROOT;
echo "<br />";

$array = array("1,2,3");
$array2 = [1,2,3,4];

//array dizzionario
$elementi = [];
$elemento = ["nome" => "Francesco", "cognome" => "Santi", "età" => "25"];
$elementi[] = $elemento;

$elementi = [];
$elemento = ["nome" => "Maggie", "cognome" => "Santi", "età" => "5"];
$elementi[] = $elemento;

//echo $elementi["nome"];
echo "<br />";
var_dump($elementi);

$elementi[1]["nome"] = "MATTIA";

var_dump($array);
print_r($array2);
echo "<br />";

// //Ciclo for
// for($i=0;$i<10;$i++) {
//     echo "number $i <br />";
//     echo "number" . $i . "<br />";
//     echo "numero $i " . $elementi[1]["nome"] . "<br />";
// }

// //.= concateno

// echo "<select>";
// for($i=0;$i<cal_days_in_month(CAL_GREGORIAN, 4, 2021);$i++) {
//     echo "<option value='$i'>$i</option>";
// }
// echo "</select>";


// // ciclo foreach
// $days = [];
// $months = [];

// for($j=1;$j<=12;$j++) {
//     $day = [];
//     $months[] = "<option value='$j'>$j</option>";
//     for($i=0;$i<cal_days_in_month(CAL_GREGORIAN, 4, 2021);$i++){
//         $day[] = "<option value='$i'>$i</option>";
//     }
//     $days[] = $day;
// }

// echo "<select>";



// ricapitoliamo

echo "recap";
echo "<br />";
echo "<br />";
echo "<br />";

$elenco = [
    1,
    2,
    3,
    4,
    5
];

print_r($elenco);
echo "<br />";

echo $elenco[2];

foreach($elenco as $k=>$v){
    echo $k . " " . $v . "<br />";
}


$ago = "Ciao sono un saluto";

echo strstr("Ciao", $ago);

//riprovareli a casa
//operazioni, esponenzioali, array, concatenarli ecc...


//Oggetti e classi
$object = new StdClass;

$object->name = "Superman";

print_r($object);

class Persona {
    public $name;

    function setName($valore) {
        $this -> name = $valore;
    }
}

$persona = new Persona;
$persona->name = "Topolino";
echo"<pre>";
print_r($persona);
echo"</pre>";



$persona->setName("Topolina");
echo"<pre>";
print_r($persona);
echo"</pre>";
//
//