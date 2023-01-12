<?php
//arrow function.
$arr = [1,2,3,4,5,6,7];

//anonymous function.
$res = array_map(function ($n){
 return $n * 10;
}, $arr);
echo "<pre>";
print_r($res);
echo "</pre>";



//arrow function.
$result = array_map(fn($n) => $n*10,$arr);
print_r($result);
?>