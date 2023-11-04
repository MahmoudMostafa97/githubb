<?php 


$colors=["red","green","blue"];
//var_dump($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo count($colors)."<br>";
//put element at the bigining of the array--->array_unshift
array_unshift($colors,"black","yellow")."<br>";
echo "<pre>";
print_r($colors);
echo "</pre>";

//put element at the end of the array--->array_push
array_push($colors,"white");
echo "<pre>";
print_r($colors);
echo "</pre>";
//put element at the end of the array--->
$colors[]="black";
echo "<pre>";
print_r($colors);
echo "</pre>";
//replace index
$colors[2]="black";



?>