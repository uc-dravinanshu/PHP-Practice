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
?>