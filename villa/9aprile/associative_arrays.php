<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <input type="text" name="student">
        <br><input type="submit">
    </form>

    <br><br>

    <?php
        $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
        echo $grades[$_POST["student"]];

    ?>

</body>
</html>