<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Lib Game</title>
</head>
<body>
    <form action="madlib.php" method="get">
        Color: <input type="text" name="color"><br>
        Plural noun: <input type="text" name="noun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        
        <input type="submit">
    </form>
    <br><br>

    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";    
        echo "$noun are blue <br>";    
        echo "I love $celebrity <br>";    
    
    
    ?>
</body>
</html>