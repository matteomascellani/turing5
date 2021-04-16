<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters</title>
</head>
<body>
    <form action="urlparameters.php" method="get">
        Name: <input type="text" name="name"><br><br>
     
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_GET["name"];
    // you can pass paramenters to the url and php will treat them as varables and values
    ?>
</body>
</html>