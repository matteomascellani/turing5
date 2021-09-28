<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestore Animali</title>

    <style>
        body{
            color: rebeccapurple;
        }

        h1{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }

        ul{
            color: black;
            text-decoration: dotted;
            background: #e3e3e3;
        }

        h3{
            color: rebeccapurple;
        }
    </style>


</head>
<body>
    <h1>Animali</h1>

    <ul>
        <?php foreach($animali as $nome => $razza) : ?>
            
            <li><strong><?= $nome; ?></strong> <?= $razza; ?></li>

        <?php endforeach; ?>
    </ul>

    <h3>Inserire del testo</h3>
    <input type="text">
</body>
</html>