<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<body>
    <?php
    $name = "Marco";
    $nation = "Italy";

    // echo 
    echo "Hello World, my name is {$name} <br>";
    
    # print
    print "Hello World! " . "my name is {$name} <br>";

    echo nl2br("My name is Marco \r\n and I'm italian");
    echo "<br> I live in " . $nation . "<br>";
    echo "I like programming";
    /* 
    this is a multiline comment

    valriable names start only with letters or underscore
    the first letter can be followed by any number of letters. numbers or underscores.
    
    */
    
    // associative array
    echo("<br>");
    
    $cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);

    print_r($cars);

    echo("<br>");

    var_dump($cars);

    echo("<br>");

    foreach ($cars as $key => $value) {
        echo "My " . $key . " has " . $value . "km. <br>";
    }

    $cars2 = array(
        "Expensive" => array("Audi", "Mercedes","BMW"), 
        "Inexpensive" => array("Volvo","Ford","Toyota")
    );


    echo $cars2["Expensive"][1];

    echo("<br>");

    $average = 5.66666666666667;
    echo number_format($average, 2, ',', ' ');
    

    echo("<br>");
    $capitols = array(
        "Italy" => "Rome",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Australia" => "Camberra",
        "Spain" => "Madrid"
    );
    echo("<br>");
    foreach ($capitols as $key => $value) {
        echo $value . " is the capitol of " . $key . "<br>";
    }

    echo("<br>");

    $role = "Visitor";

    switch ($role) {
        case 'Visitor':
            echo "welcome Visitor!";
            break;
        case 'Admin':
            echo "welcome Admin!";
            break;
        case 'Superadmin':
            echo "welcome Superadmin!";
            break;
        case 'Boss':
            echo "welcome Boss!";
            break;
        default:
            echo "user has no role!";
            break;
    }


    ?>
</body>
</html>