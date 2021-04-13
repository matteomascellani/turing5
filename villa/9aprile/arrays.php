<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim", 1, false, array());
        echo '$friends[0] ->' . $friends[0] . '<br>';
        echo '$friends[1] ->' . $friends[1] . '<br>';
        echo '$friends[2] ->' . $friends[2] . '<br>';

        echo 'count friends -> ' . count($friends) . '<br>';

        $friends[100] = 100;
        echo 'count friends -> ' . count($friends) . '<br>';
        echo '$friends[100] -> ' . $friends[100] . '<br>';
        echo '$friends[8] -> ' . $friends[8] . '<br>';
        ?>
</body>
</html>