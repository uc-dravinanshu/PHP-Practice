<?php
//array operator..
// $arr1 = [1,2,3,4,5,6,7];
// $arr2 = [8,9,10,11,12,13,14,15,16,17];

// $arr1 = ['a','b','c'];
// $arr2 = ['d','e','f']; //Array ( [0] => a [1] => b [2] => c )


$arr1 = ['a'=>1, 'b'=>2, 'c'=>3];
$arr2 = ['a'=>4, 'b'=>5, 'e'=>6]; //Array ( [a] => 1 [b] => 2 [c] => 3 [e] => 6 )

$arr3 = $arr1 == $arr2;
var_dump($arr3);
print_r($arr3);
?>