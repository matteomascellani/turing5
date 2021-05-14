<?php

$animali = ['dog','cat'];

function dumper($uno, $due, $tre){

    var_dump($uno, $due, $tre);
}


function maggiorenne($eta) {
    if ($eta > 18) {
        echo "puoi entrare";
    } else {
        echo "non puoi entrare";
    }
}

maggiorenne(2);


//dd si usa spesso in php per le funzioni
function dd($variabile){
        echo '<pre>';
        die(var_dump($variabile));
        echo '</pre>';

}

dd($animali);

//dumper('hello', 'big', 'world');

//require_once('C:\Users\franc\Desktop\php\es6\view\index.view.php');


