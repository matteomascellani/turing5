<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groot</title>
    <style>
        header{
            background: grey;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
    <h1>
        
        <?php
            // parte di php

            $name = $_GET['name'];  // prende il nome dall'iseriemnto nel link   es http://localhost:8888/?name=Marvel

            echo "Hello, $name";

        ?>

    </h1>

    <h1>
        <?php echo "Hello, " . htmlspecialchars($_GET['name']); 
        //htmlspecialchars -> in imput nel link di ricerca non puoi inserire codice html e pensare che funzioni, perchè con questo te lo limito,  muahahah
        ?> 
    </h1>

    <h1><a href="http://google.com">cabum</a></h1>
    </header>
    
</body>
</html>