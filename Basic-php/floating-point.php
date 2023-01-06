<?php
//floating point numbers.
$x = 13.5e3;  
echo $x; //13500 exponential numbers.
echo "<br/>";

$y = 12.5e3;
echo $y;
echo "<br/>";

$z = 13.5e-3;
echo $z;
echo "<br/>"; 

$a = 13_500.55;  //for the reason better readbility.
var_dump($a);
echo "<br/>";

echo PHP_FLOAT_MAX."<br/>";
ECHO PHP_FLOAT_MIN."<br/>";
echo PHP_FLOAT_DIG."<br/>";


//floor number.
$b = floor((8.1 + 8.7)*10);
// var_dump($b);
echo $b;
echo "<br/>";

//ceil number.
$c = ceil((8.1 + 8.7)*10);
// var_dump($b);
echo $c."<br/>";

//compare float numbers.
$d = 8.2;
echo $d."<br/>";

$e = 8.2;
echo $e."<br/>";
var_dump($d, $e);
echo "<br/>";

//compare two float with same numbers.
if($d == $e) {
    echo true;
} else {
    echo false;
}
echo "<br/>";


//NAN.
echo log(-1);
echo "<br/>";

//INF.
echo PHP_FLOAT_MAX *2;
echo "<br/>";


//How to check Number is Infinity.
$g = PHP_FLOAT_MAX * 2;
var_dump(is_infinite($g));
echo "<br/>";

//how to check number is float or not.
$h = 12.5;
var_dump(is_float($h));
echo "<br/>";


//type casting in php, int to float.
$i = 10;
var_dump((float) $i);

?>