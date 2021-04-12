<?php

class Calcolatrice
{
    public $risultato;

    public function __construct()
    {
    }

    public function start($integer)
    {

        $this->risultato = $integer;
    }

    public function sum($integer)
    {

        $this->risultato += $integer;
    }

    public function sub($integer)
    {

        $this->risultato -= $integer;
    }

    public function mol($integer)
    {

        $this->risultato *= $integer;
    }

    public function div($integer)
    {

        $this->risultato /= $integer;
    }

    public function result()
    {

        return $this->risultato;
    }
}
