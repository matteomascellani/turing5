<?php

class Calcolatrice{

    public $risultato;

    public function start($integer){

        $this->risultato = $integer;
    }

    public function sum($integer){
        $this -> risultato += $integer;
    }

    public function sub($integer){
        $this -> risultato -= $integer;
    }

    public function mol($integer){
        $this -> risultato *= $integer;
    }

    public function div($integer){
        $this -> risultato /= $integer;
    }

    public function result(){
        return $this->risultato;
    }
}
$actual = $_POST["actual"] ?? 0;
$operator = $_POST["operator"];
$integer = $_POST["integer"] ?? 0;

$calcolatrice = new Calcolatrice;
$calcolatrice->start($_POST["actual"]);
$calcolatrice->$operator($_POST["integer"]);
$risultato = $calcolatrice->result();

echo $risultato;
