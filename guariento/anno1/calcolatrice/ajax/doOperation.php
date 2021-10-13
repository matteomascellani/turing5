<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/02_primo-anno/02_calcolatrice/classes/Calculator.php");

$oprd1 = (int)($_POST["oprd1"]) ?? 0;
$oprd2 = (int)($_POST["oprd2"]) ?? 0;
$oprt = (string)($_POST["oprt"]) ?? "";

$calculator = new Calculator($oprd1);

$risultato = $calculator->calc($oprd2, $oprt);

echo $risultato;
