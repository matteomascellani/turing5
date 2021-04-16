<?php
define ("ROOT", $_SERVER["DOCUMENT_ROOT"]);
$v=1;
echo $v;
echo "<br />";
$v--;
echo $v;
echo "<br />";
$v -=3;
echo $v;
$v= $v -3;
echo "<br />";
echo $v;
echo "<br />";

$array= array(1,2,3,4,5,6,7,8);

$elementi=[];
$elemento=["Nome"=>"Matteo", "Cognome"=>"Evangelista 1", "Età"=> 2090];
$elementi[]=$elemento;
$elemento=["Nome"=>"Marco", "Cognome"=>"Evangelista 2", "Età"=> 45];
$elementi[]=$elemento;
$elemento=["Nome"=>"Luca", "Cognome"=>"Evangelista 3", "Età"=> 45];
$elementi[]=$elemento;
$elemento=["Nome"=>"Giovanni", "Cognome"=>"Evangelista 4", "Età"=> 45];
$elementi[]=$elemento;

$elemento=array();
$elemento["Nome"]="Michele";
$elementi[]=$elemento;
$elementi[2]["Nome"]="Mattia";

$days="";
$months= "<select>";
for($j=1;$j<=12;$j++){
    $months="<option value= '$j'>$j</option>";
    $days="<select>";
    for($i=1;$i<cal_days_in_month(CAL_GREGORIAN,$j,2020);$i++)
    {
        echo "<option value='$i'> $i </option>";
    } 
echo"</select>";
}
$months="</select>";

//altro modo per scrivere il calendario
for($j=1;$j<=12;$j++)
{
    $giorno=[];
    $mesi[]="<option value='$j'>$j</option>";
    for($i=1;$i<cal_days_in_month(CAL_GREGORIAN,$j,2020);$i++)
    {
        $giorno[]= "<option value='$i'> $i </option>";
    }
    $giorni[]=$giorno;
}

echo "<select>";
foreach($mesi as $mese) 
{
    echo $mese;
}
echo "</select>";

class Persona{
    public $name;
    public $cognome;
    function setName($valore)
    {
        $this->name=$valore;
    }
}

$persona=new Persona('Marco','Rossi');
$persona->name="Matteo";
$persona->setName("Luca");
echo $persona->name;