<?php
//array.

//create abn empty array.
$arr = [];
$arr1 = array();
var_dump($arr);
echo "<br/>";
var_dump($arr1);
echo "<br/>";

//array with square brekets.
$arr2 = ['php', 'C', 'C++', 'Java'];
print_r($arr2);
echo "<br/>";

//create array with array function in php.
$arr3 = array('php', 'java', 'c', 'c++');
print_r($arr3);
echo "<br/>";

//how to access element in an array.
echo $arr3[0]."<br/>";


//if you check indexed is present in your array element.
 var_dump(isset($arr3[4]));
 echo "<br/>";


 //how to add element in an array.
 $arr3[4] = "JavaScript";

 echo $arr3[4]."<br/>";

 echo "<pre>";
  print_r($arr3);
 echo "</pre>";
 
?>