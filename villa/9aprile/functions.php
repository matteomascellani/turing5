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
       function sayHi($name, $age){
           echo "Hello $name, you are $age! <br>";
       } 

       sayHi("Mate",25);
       sayHi("Tom", 60);
       sayHi("Dave", 45);

    ?>

</body>
</html>