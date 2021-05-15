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

$persona1 = new persona("Mauro","Sconti");
echo "Invitato n1: " .$persona1->getName() . " " .$persona1->getCognome()."<br>";

$persona2 = new persona("Maggie","Crocks");
echo "Invitato n2: " .$persona2->getName() . " " .$persona2->getCognome()."<br>";

$persona3 = new lavoratore("Pippo","Rossi","Attore televisivo");
echo "Invitato n3: " .$persona3->getName() . " " .$persona3->getCognome(). " " .$persona3->getLavoro()."<br>";

$persona4 = new studente("Francesco","Santi","Studente informatica");
echo "Invitato n3: " .$persona4->getName() . " " .$persona4->getCognome(). " " .$persona4->getStudio()."<br>";
