<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Strawberres: <input type="checkbox" name="fruits[]" value="strawberries"><br>

        <br><input type="submit">
    </form>
<br><br>

    <?php
        $fruits = $_POST["fruits"];

        echo $fruits[0];



    ?>
</body>
</html>