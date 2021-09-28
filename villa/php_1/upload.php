<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //find file name
    $tmp_name = $_FILES['file']['tmp_name']; //find file name
    $size = $_FILES['file']['size']; //find file name
    $error = $_FILES['file']['error']; //find file name

    // explode from punctuation mark
    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    // Allowed extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    // 0 -> no error // 1 -> error
    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: superglobals.php?uploadedsuccess");
            } else {
                echo "Sorry, file is too big!";
            }
        } else {
            echo "Sorry, something went wrong! Try again";
        }
    } else {
        echo "Sorry, file type not accepted";
    }
}

?>