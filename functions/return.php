<?php   

 function plus($num1,$num2) {
     return $num1 + $num2 ;
 }

 $result= plus(4,6);
 //echo $result ;

 function fullname($fname="X",$lname="Y") {
     return $fname." ".$lname;
 }
 echo fullname("Mahmoud","Mostafa");
?>