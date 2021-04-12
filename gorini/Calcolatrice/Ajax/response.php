<?php

$actual = $_POST["actual"] ?? 0;
$operator = $_POST["operator"] ?? '';
$integer = $_POST["integer"] ?? 0;

$calcolatrice = new Calcolatrice;
$calcolatrice->start($actual);
$calcolatrice->$operator($integer);
$risultato = $calcolatrice->result();

echo $risultato;
