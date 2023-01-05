<?php
//integer.
$x = PHP_INT_MAX;
echo $x."<br/>";

$y = PHP_INT_MIN;
echo $y."<br/>";

$x = PHP_INT_SIZE;
echo $x."<br/>";

//through type casting, integer number becomes float.
$a = (int) 2.8;
var_dump($a);
echo "<br/>";

//how to check it is an integer or not.
$b = (int) true;
var_dump(is_int($b)); //return true because we are here type casting.
echo "<br/>";

//in php 7.4 you can write integer value like this.
$d = 200_00;
var_dump($d);

?>