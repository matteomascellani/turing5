<?php

define("A",1);
$array = [
    "nome :" => "david",
    "cognome :" => "calin",
    "eta :" => 21
];
echo A;
echo "<br>";
for ($i=1; $i <10; $i++) { 
    echo "Numero:" . $i . "<br>";
}

foreach ($array as $prova=>$valore){
    echo $prova . " " . $valore . "<br>";
}

class Persona {

    public $nome;

    function SetName($valore) {
        $this -> nome = $valore;
    }
}

$persona = new Persona;
echo $persona->SetName($nome);