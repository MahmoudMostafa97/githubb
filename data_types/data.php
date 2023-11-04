<?php

$sun=true;
$salary=false;
echo gettype($sun)."<br>";
$age=15;
$price=150.5;
$name="Mahmoud";
 //array
 $colors=["red","blude","green"];
 echo gettype($colors)."<br>";
 //resource
 $file=fopen("data.txt","r");
 echo gettype($file);

?>
