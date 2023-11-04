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

$i=0;
$colors=["red","green","blue","white","orange","black","yellow"];?>
    <h3>
        <?php    echo $colors[$i]."<br>";       ?>
    </h3>
    <h3>
        <?php    echo $colors[++$i]."<br>";       ?>
    </h3>
    <h3>
        <?php    echo $colors[++$i]."<br>";       ?>
    </h3>
    <h3>
        <?php    echo $colors[++$i]."<br>";       ?>
    </h3>
    <h3>
        <?php    echo $colors[++$i]."<br>";       ?>
    </h3>
    <h3>
        <?php    echo $colors[++$i]."<br>";       ?>
    </h3>
    
</body>
</html>