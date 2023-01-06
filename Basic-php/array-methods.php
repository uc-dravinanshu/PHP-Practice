<?php
//array methods.
//count.
$arr = ['Php', 'Java', 'C', 'C++', 'JavaScript'];
echo count($arr)."<br/>";

//push array.
$arr[] = 'Python';
$arr[] = 'flutter';
print_r($arr);
echo "<br/>";

//array_push methdo using push the array element.
array_push($arr,'swift','ruby');
print_r($arr);
echo "<br/>";

//array pop method.
echo "Remove last element = ".array_pop($arr);
echo "<br/>";
print_r($arr);
echo "<br/>";

//array shift method.
echo "remove first element = ".array_shift($arr)."<br/>";
print_r($arr);
echo "<br/>";

// unset($arr); ==> it will be destroying entire array.
unset($arr[0], $arr[1]); //it removes 0 (zero) index with value.
print_r($arr);
echo "<br/>";

//unshift method .
array_unshift($arr,'hello', 'ashu');
print_r($arr);
echo "<br/><br/><br/><br/><br/>";

//type casting in PHP.
$x = null;
var_dump((array) $x);
echo "<br/>";

$y = 10;
var_dump((array)$y);
echo "<br/>";

$z = 20;
var_dump((array) $z);
echo "<br/>";

//check array key exists or not.


?>