<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body style="background-color:LightGray;">
    
    <h1>Task For The Day</h1>

   
    <ul>

        <?php foreach ($stack as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading); ?>: </strong> <?= $value ?>
            </li>    

        <?php endforeach; ?>
        
    </ul>


</body>
</html>