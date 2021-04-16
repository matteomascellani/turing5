<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <form action="switch_statement.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <br><input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case 'A':
                echo "great job!";
                break;
            case 'B':
                echo "good job!";
                break;
            case 'C':
                echo "doing fine";
                break;
            case 'D':
                echo "need more effort";
                break;
            case 'E':
                echo "too bad";
                break;
            case 'F':
                echo "what a shit";
                break;

            default:
                echo "Invalid Grade..";                
                break;
        }
    ?>

</body>
</html>