<?php
 $x = 30;
 $output= '';
 echo "This is the simple if else statement through. <br/> Condition true only when 10 & 30 number enter. <br/>";
 if ($x==10 || $x==30) {
    $output="Yes &nbsp;".$x;
 } else {
    $output="No &nbsp;".$x;
 }
 echo $output;


 //this way turn into match expression.
$x = 40;
$output="";
 $output = match($x) {
    10,30=>"Yes = ".$x,
    default=>"No match find number = ".$x
 };

 echo $output;

?>