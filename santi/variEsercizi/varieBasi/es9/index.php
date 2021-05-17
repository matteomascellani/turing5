<?php

//provare a colleagarsi al dp 
try{
   $pdo= new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
} catch(PDOException $e){
    die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchALL());