<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site 2 (input)</title>
</head>
<body>
    <form action="site2.php" method="get">
        Name: <input type="text" name="username"><br>
        &nbsp;&nbsp;Age: <input type="number" name="age"><br><br>
        <input type="submit">
    </form> 
<br>   

Your name is: <?php echo $_GET["username"] ?><br>
Your age is: <?php echo $_GET["age"] ?><br>


</body>
</html>