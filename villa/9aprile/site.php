<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>

    
    <?php 

    // html and variables
    echo("<h1>Hello World</h1>");
    echo("<hr>");
    echo("<h3>Sito di Marco Villa</h3>");

    $name = "John";
    $age = 45;

    echo "There was once a man called $name <br>";
    echo "He was $age years old<br><br>";
    
    $name = "Tom";
    $age = 30;
    
    echo "There was once a man called $name <br>";
    echo "He was $age years old";

    //datatypes
    $string = "just text";
    $integer = 1;
    $float = 4.5;
    $bool = true;
    $null = null;

    // strings
    echo strlen($string);
    echo strtoupper($string);
    echo $string[0] = "F";
    echo $string;
    echo str_replace("Fust", "Only", $string);
    
    // numbers
    echo 40;
    echo 40+20;
    $num = 30;
    $num++;
    echo $num;
    echo sqrt(144);
    echo max(2, 10);

   
    ?>
</body>
</html>