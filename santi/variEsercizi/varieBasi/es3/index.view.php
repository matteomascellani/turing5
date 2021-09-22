<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I'm Groot</title>

    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>
<body>

    <header>
    <h1>
        
        <?= $greeting; ?>

    </h1>

    <ul>
        
        <?php
        //mostra l'array a video
            foreach($names as $name){
                echo "<li>$name</li>";
            }
        ?>
        
    </ul>

    <ul>
        <!-- Sinteassi alterantiva per rappresentare l'array a video -->
        <?php foreach($names as $name) : ?>
            
            <li><?= $name; ?></li>

        <?php endforeach; ?>

    </ul>

    </header>
    
</body>
</html>