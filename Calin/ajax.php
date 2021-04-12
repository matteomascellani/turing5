<?php

class Calcolatrice{


        public $risultato;
    
        public function start($integer) {
    
            $this -> risultato = $integer;
    
        }
    
        public function sum($integer) {
    
            $this -> risultato += $integer;
        }
    
        function sub($integer) {
    
            $this -> risultato -= $integer;
    
        }
    
        function mol($integer) {
    
            $this -> risultato *= $integer;
    
        }
    
        function div($integer) {
    
            $this -> risultato /= $integer;
    
        }
    
        public function result() {
    
            return $this->risultato;
    
        }
    
    }
    
    

$calcolatrice = new Calcolatrice();
$actual = $_POST["actual"] ?? 0;
$operator = $_POST["operator"] ?? '';
$integer = $_POST["integer"] ?? 0;

$calcolatrice = new Calcolatrice;
$calcolatrice->start($actual);
$calcolatrice->$operator($integer);
$risultato = $calcolatrice->result();

echo $risultato;
?>