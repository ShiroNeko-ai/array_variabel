<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $tims = ['Marin','Shiro','Nekopoi','Setsuna'];
    array_shift($tims); 
    foreach ($tims as $value) {
        echo $value. '<br>';
    }
    ?>

    <hr>

    <?php
    $tims = ['Marin','Shiro','Nekopoi','Setsuna'];
    array_unshift($tims,'Ahnaf','Sholeh'); 
    foreach ($tims as $value) {
        echo $value. '<br>';
    }
    ?>
</body>
</html>