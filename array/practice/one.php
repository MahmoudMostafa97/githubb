<?php 


$colors=["red","green","blue","white"];
// to remove last element in arraay
//array_pop($colors);
// other way to remove last element in array
// unset($colors[count($colors)-1]);
// echo "<pre>";
// print_r($colors);
// echo "</pre>";
// // to insert array to array end 
// $old_colors=["red","green","blue"];
// $new_colors=["white","black"];
// $old_colors[count($old_colors)]=$new_colors[0];
// $old_colors[count($old_colors)]=$new_colors[1];
// echo "<pre>";
// print_r($old_colors);
// echo "</pre>";



// insert element to middle 
// $blue=$colors[2];
// $white=$colors[3];
// $colors[2]="orange";
// $colors[3]="black";
// $colors[4]="yellow";
// $colors[5]=$blue;
// $colors[6]=$white;



// to reverse array
$j=0;
$i=count($colors)-1;
$colors1[$j]=$colors[$i];
$colors1[++$j]=$colors[--$i];
$colors1[++$j]=$colors[--$i];
$colors1[++$j]=$colors[--$i];

$reversed_array=array_reverse($colors);

echo "<pre>";
print_r($reversed_array);
 echo "</pre>";







?>



<!--print element of array in ul -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $colors=["red","green","blue","white"];
        $i=0; ?>
<ul>
    <li>  <?php echo $colors[$i]; ?></li>
    <li>  <?php echo $colors[++$i];?></li>
    <li>  <?php echo $colors[++$i];?></li>
    <li>  <?php echo $colors[++$i];?></li>


</ul>



    
</body>
</html>