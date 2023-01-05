<?php
//constant in PHP 
// define('STATUS_PAID', 'Paid');
// echo STATUS_PAID."<br/>";

// //if you want to check constant define already or not.
// echo defined('STATUS_PAID'); //if defined return 1 otherwise returns 0 or not show in screen
// echo defined('STATUS');
// echo "<br/>";


//how to defined constant anotherway in PHP.
const LoggedIn = true;
echo LoggedIn."<br/>";


//some ways are defin constant like these ways.
$paid = 'PAID';
define('STATUS_'. $paid, 4);
echo STATUS_PAID."<br/>"; //4


//How to check PHP versions.
echo PHP_VERSION."<br/>";


//how to check line number & file name & directory in PHP
echo __LINE__."<br/>";
echo __FILE__."<br/>";
echo __DIR__."</br/>";


//how to define variable of varibale.

$Name = "Dravinanshu Mishra";

$var = "Name";

// echo $var." ".$$var;

echo "$var = ${$var}";

?>