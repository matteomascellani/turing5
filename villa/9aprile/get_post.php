<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
<!--
    <form action="get_post.php" method="get">
        Password (get): <input type="password" name="pwd"> <br><br>
        <input type="submit">
    </form>
-->
    <br><br>
    <form action="get_post.php" method="post">
        Password (post): <input type="password" name="pwd2"> <br><br>
        <input type="submit">
    </form>

    <br><br>

    <?php
//        echo $_GET["pwd"];
        echo $_POST["pwd2"];

    ?>

</body>
</html>