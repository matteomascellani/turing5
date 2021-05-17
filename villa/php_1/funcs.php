<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php

    // Camel case --- vars funcs
    // myFunction();

    // Lower case --- vars funcs
    // my_function();

    // Pascal case --- classes
    // MyFunction();

    function myFunction(){
        echo "Hello function! <br>";
    }
    
    myFunction();

    function calculator($n1, $n2 = 0){
        return $n1 + $n2;
    }

    echo calculator(3);

    ?>
</body>
</html>