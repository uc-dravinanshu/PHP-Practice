<?php
//null in php.
$x = null;
echo $x."<br/>";
var_dump($x);
echo "<br/>";

//check is null or not.
var_dump(is_null($x));
echo "<br/>";

//type cast null as a string, integer.
$y =null;
var_dump((string)$y);
echo "<br/>";
var_dump((int)$y);
echo "<br/>";
var_dump((float)$y);
echo "<br/>";
var_dump((bool)$y);
echo "<br/>";
var_dump((array)$y);
echo "<br/>";
var_dump((object)$y);
echo "<br/>";
var_dump((bool)$y);
echo "<br/>";
?>