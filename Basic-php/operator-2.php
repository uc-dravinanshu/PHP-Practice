<?php
//string operator ==> also know as concatnation operator.
$Name = 'Dravinanshu';
$fullName = $Name." Mishra";
echo $fullName."<br/>";


//comparisons operator.
$x = 10;
$y = '10';

if($x == $y) {
    echo "true <br/>";
} else {
    echo "false";
}

if($x === $y) {
    echo "true";
} else {
    echo "false <br/>";
}


//spaceship operator.
$a = 4;
$b = 3;
var_dump($a <=> $b);
echo "<br/>";


//find index.
$abc = "Hello World";
$xyz = strpos($abc, 'W');

if($xyz === false) {
    echo "W Not found <br/>";
} else {
    echo "W found at Index"."[". $xyz."]"."<br/>";
}

//ternary operator.
$res = ($xyz == false) ? "W is not found":"W found at index"."[". $xyz."]"."<br/>";
echo $res;


//error handling operator.
$file = @file("foo.php");
//supress the error if the file is not exist.


//increment and decrement operator.
$g = 10;
echo ++$g."<br/>";
echo $g++."<br/>";
echo --$g."<br/>";
echo $g--."<br/>";
echo $g."<br/>";


//logical operator.
$m = 1;
$n = 0;
var_dump($m && $n);
echo "<br/>";
var_dump($m || $n);
echo "<br/>";
var_dump($m != $n);
?>