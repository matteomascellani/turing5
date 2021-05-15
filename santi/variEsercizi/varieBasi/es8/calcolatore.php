<?php
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

