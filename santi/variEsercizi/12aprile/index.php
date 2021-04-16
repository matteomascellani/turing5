<?php
//Alleniuamoci con le classi o gli oggetti
class persona {
    
    public $name = "";
    public $cognome = "";

    public function __construct($name,$cognome)
    {
        $this->name = $name;
        $this->cognome = $cognome;
    }

    public function getName() {
        return $this->name;
    }

    public function getCognome() {
        return $this->cognome;
    }
}

class lavoratore extends persona{

    private $lavoro = "";

    public function __construct($name,$cognome,$lavoro)
    {
        $this->name = $name;
        $this->cognome = $cognome;
        $this->lavoro = $lavoro;
    }

    public function getLavoro() {
        return $this->lavoro;
    }

}

class studente extends persona{

    private $lavoro = "";

    public function __construct($name,$cognome,$studio)
    {
        $this->name = $name;
        $this->cognome = $cognome;
        $this->studio = $studio;
    }

    public function getStudio() {
        return $this->studio;
    }

}

echo "<br>Prova classe persona<br>";
$persona1 = new persona("Mauro","Sconti");
echo "Invitato n1: " .$persona1->getName() . " " .$persona1->getCognome()."<br>";

$persona2 = new persona("Maggie","Crocks");
echo "Invitato n2: " .$persona2->getName() . " " .$persona2->getCognome()."<br>";

echo "<br>Prova classe lavoratore che estende persona<br>";
$persona3 = new lavoratore("Pippo","Rossi","Attore televisivo");
echo "Invitato n3: " .$persona3->getName() . " " .$persona3->getCognome(). " " .$persona3->getLavoro()."<br>";

echo "<br>Prova classe studente che estende persona<br>";
$persona4 = new studente("Francesco","Santi","Studente informatica");
echo "Invitato n3: " .$persona4->getName() . " " .$persona4->getCognome(). " " .$persona4->getStudio()."<br>";


echo "<br>Calcolatrice<br>";
//calcolatrice a me
class calcolatrice {
    
    private $numero = "";
    private $numero2 = "";

    public function __construct($numero,$numero2)
    {
        $this->numero = $numero;
        $this->numero2 = $numero2;
    }

    public function somma() {
        return $this->numero + $this->numero2 ;
    }

    public function sottrazione() {
        return $this->numero - $this->numero2 ;
    }

    public function prodotto() {
        return $this->numero * $this->numero2 ;
    }

    public function divisione() {
        return $this->numero / $this->numero2 ;
    }
}

$calcolo = new calcolatrice(10,78);
echo "somma: " . $calcolo->somma() ."<br>";
echo "sottrazione: " . $calcolo->sottrazione() ."<br>";
echo "prodotto: " . $calcolo->prodotto() ."<br>";
echo "divisione: " . $calcolo->divisione() ."<br>";

