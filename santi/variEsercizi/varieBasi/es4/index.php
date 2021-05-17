<?php
//Immagazzino i dati

//array associativo - tipo un dizzionario?
$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'Web developer'
];

//push
$person['name'] = 'Francesco';

//rimuove un valore dall'array
unset($person['age']);


// Mostra il valore di age
echo $person['age'];

//vedere l'array a video, si usa i var_dumb perchè con eco si apsetta una stringa
echo '<pre>';
var_dump($person);
echo '<pre>';

// con DIE tutto quello dopo muore
die('hello world');

//Carico la view da mostrare sul web
require 'index.view.php';