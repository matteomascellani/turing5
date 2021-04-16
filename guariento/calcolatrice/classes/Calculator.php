<?php

class Calculator
{
    private $result;

    public function __construct($oprd)
    {
        $this->result = $oprd;
    }

    public function calc($oprd, $oprt)
    {
        switch ($oprt) {
            case "+":
                $this->sum($oprd);
                break;
            case "-":
                $this->sub($oprd);
                break;
            case "*":
                $this->mul($oprd);
                break;
            case "/":
                $this->div($oprd);
                break;
        }

        return $this->result;
    }

    private function sum($oprd)
    {
        $this->result += $oprd;
    }

    private function sub($oprd)
    {
        $this->result -= $oprd;
    }

    private function mul($oprd)
    {
        $this->result *= $oprd;
    }

    private function div($oprd)
    {
        $this->result /= $oprd;
    }
}
