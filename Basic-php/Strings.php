<?php
//string.
$firstName = "Dravinanshu";
$lastName = "Mishra";
echo $firstName. " ".$lastName."<br/>";


//other way. PHP supports 7.4 above.
$n = "Will";
$l = "{$n} Smith";
echo $l."<br/>";

//other way of 2. PHP removes 7.4 above.
$na = "Will";
$la = "${na} Smith";
echo $la."<br/>";


//other ways for reading strings.
$nam = 'Ashu';
$las = 'Mishra';
$fullName = $nam.' '.$las;
echo $fullName."<br/>";

//how to get charcater of each one by one in string.
echo $fullName[0]."<br/>";  //fisrt A
echo $fullName[-2]."<br/>"; //last r

//how to change any characters in strings.

$fullName[0] = 'a';
$fullName[-1] = 'A';
echo $fullName."<br/>";


//add strings.
 //fist find lenght and data type.
 var_dump($fullName);
 echo "<br/>";

 $fullName[12] = 'D';
 echo $fullName."<br/>";

 //add more.
 $fullName[13] = 'r';
 echo $fullName;
?>