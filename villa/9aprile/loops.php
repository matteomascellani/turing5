<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        $index =1;
        while ($index <= 10) {
            echo $index;
            $index++;
        }

        $index2 = 1;
        do {
            echo $index2;
            $index2++;
        } while ($index <= 10);

        for ($i=0; $i < 10; $i++) { 
            echo $i;
        }

        $a = array(1,2,3,4,5,6,7,9,0);
        
        foreach ($variable as $key => $value) {
            # code...
        }
    ?>

</body>
</html>