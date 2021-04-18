<?php

define("ROOT",$_SERVER["DOCUMENT_ROOT"]);



echo "Hello!";

$v=1;
echo $v;
echo"<br />";
$v++;
echo $v;
$v-=1;
echo"<br />";
$v=6;
echo $v;
echo"<br />";
$stringa=" 2000 stringa";
echo (int)$stringa +1;

echo"<br />";

$array = array(1,2,3,4,5,5,6);
$array2 =[1,23,4,4,45,5];
$array3= ["nome"=>"Claudio","cognome"=>"Vidhi"];

$elementi=[];
$elemento=["nome"=>"Claudio","cognome"=>"Vidhi"];
$elementi[]=$elemento;
echo"<pre>";
print_r($array);
print_r($array2);
print_r($array3);
echo"</pre>";

for($i=0;$i<1;$i++){
    echo "Numero $i".$elementi[0]["cognome"]."<br />";
}
foreach($array2 as $k=>$v){
    echo $k." ".$v."<br />";
}



class Persona{

    public $name;

    function setName($valore){
        $this -> name=$valore;
    }

    function getName(){
        return $this->name;
    }
    function setsurName($valore){
        $this -> surname=$valore;
    }
    function getsurName(){
        return $this->surname;
    }
}

$persona = new Persona;
$persona->name ="Claudio";
$persona->surname="Vidhi";
echo"<pre>";
print_r($persona);
echo"</pre>";
echo $persona->name;echo"<br />";
echo $persona->surname;

class Veicolo{

    var $modello;
    var $marchio;
    
    function setModello($veicolo){
      $this -> modello=$veicolo;

    }
    function getModello(){
        return $this->modello;
    }
    function setMarchio($veicolo){
        $this -> marchio=$veicolo;
    }
    function getMarchio(){

        return $this->marchio;
    }
}
$veicolo = new Veicolo;
$veicolo->modello ="A4";
$veicolo->marchio="Audi";
echo"<pre>";
print_r($veicolo);
echo"</pre>";
echo $veicolo->marchio;echo"<br />";
echo $veicolo->modello;

