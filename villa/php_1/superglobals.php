<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>
<body>
    <?php 
    // Superglobals

    // GLOBALS -> used to access global vars from anywhere in the script
        $x = 100;
        $y = 200;

        function add() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        add();
        echo $z;
        echo "<br>";


    // $_POST -> collect data from a html form (not visible in the url)
        
        if (isset($_POST)) {
            echo $_POST['name'] . ", your form was submitted!";
        }

        echo "<br>";
        print_r($_POST);


    // $_GET -> collect from a html form (visible in the url)

        if (isset($GET)) {
            echo $GET['name'] . ", your form was submitted!";
        }

        echo "<br>";
        print_r($_GET);


    // $_SERVER -> source info from hearders, paths, scripts and locations

    // $_COOKIE -> small file stored in the client pc (no sensitive info)

        // ARGUMENTS
        // Name
        // Value
        // Expire - with no expiry date the cookie lasts for the session
        // Domain
        // Security

        $time =  time() + 86400 * 30;

        setcookie("name", "Marco", $time);

        print_r($_COOKIE);

        echo "<br>";

        // can't destroy cookies - you just need to make it expire:
        // $time = time() - 86400 * 30;

    // $_SESSION -> used to store data on the server (good for sensitive info) [the session exists with the browser]

        echo "<br>";
        session_start();

        // storing info
        $_SESSION["Name"] = "Marco";
        $_SESSION["Age"] = 34;

        echo "Hello " . $_SESSION["Name"];
        
        session_destroy();
        
        // when the browser is closed the session will terminate
        echo "Hello " . $_SESSION["Name"];
        echo "<br>";
        echo "<br>";


    // $_FILES -> 2 dimension array

        // How to upload foles: 
        // 1. to the root - 
        // 2. to the database


        echo $name = $_FILES['file']['name'] . "<br>";
        echo $type = $_FILES['file']['type'] . "<br>";
        echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
        echo $error = $_FILES['file']['error'] . "<br>";

    ?>

<br><br>
    POST<form action="superglobals.php" method="post">
        Name <input type="text" name="name">
        Age <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
    
    GET<form action="superglobals.php" method="get">
        Name <input type="text" name="name">
        Password <input type="password" name="pwd">
        <button type="submit">SUBMIT</button>
    </form>

    FILES<form action="upload.php" method="post" enctype="multipart/form-data">
        File <input type="file" name="file">
        <button type="submit">SUBMIT</button>
    </form>

</body>
</html>