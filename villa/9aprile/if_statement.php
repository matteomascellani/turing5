<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <form action="if_statement.php" method="post">
    
        <br><input type="submit">
    </form>

    <?php
        $isMale = true;
        $isTall = true;

        if ($isMale || $isTall) {
            echo "It's Male";
        } else {
            echo "It's Female";
        }
    ?>
</body>
</html>