<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filePath = "uploads/file.txt";

    $output = file_get_contents($filePath);

    $ages = explode("\n", $output);


    $totalAge = 0;
    $i = 0; 

    foreach ($ages as $age) {
        echo $age . "<br>";
        $totalAge += $age;
        $i++;
    }

    echo "The average age is: " . ($totalAge / $i);
    ?>

</body>
</html>