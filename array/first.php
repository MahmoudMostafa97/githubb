<?php  
//indexed array
$colors=["red","blue","green"];

//echo $colors[0];
 
// $student= [
//     "name"=>"Mahmoud",
//     "email"=>"mahmoud97m97@gmail.com",
//     "phone"=>"0996620159"

// ];
// echo $student["name"]."<br>";
// echo $student["email"]."<br>";
// echo $student["phone"]."<br>";
$products = [
   ["product #1",150],
   ["product #2",50],
   ["product #3",200]
];
echo $products[0][0]." => ";
echo $products[0][1]."<br>";
echo $products[1][0]." => ";
echo $products[1][1]."<br>";
echo $products[2][0]." => ";
echo $products[2][1]."<br>";



?>