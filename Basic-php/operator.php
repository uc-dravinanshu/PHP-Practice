<?php
 //operator.
 //arithmetic operator.
 $x = 10;
 $y = 2;
 var_dump($x + $y);
 echo "<br/>";
 var_dump($x - $y);
 echo "<br/>";
 var_dump($x * $y);
 echo "<br/>";
 var_dump($x / $y);
 echo "<br/>";
 var_dump($x ** $y);
 echo "Exponential operator = <br/>";


 //prefix plus opeartor.
 $a = '20';
 var_dump($a); //string (20)
 echo "<br/>";
 var_dump(+$a); //integer (20)
 echo "<br/>";


 //fdiv funcion.
 $b = 10;
 $c = 0;
 //var_dump($b / $c); //Fatal error: Uncaught DivisionByZeroError: Division by zero in.
 //echo "<br/>";
 var_dump(fdiv($b , $c));
 echo "<br/>";


 //fmod function.
 $d = 10.20;
 $e = 2.9;
 var_dump($d % $e);
 echo "<br/>";
 var_dump(fmod($d , $e));
 echo "<br/>";


 //assignement operator.
 $f = 10;
 $g = $h = $i = 10;  //assignment multiple variable with same values.
 echo $f."<br/>";
 echo $g. " ".$g." ".$i. "<br/>";

 //assignment operator.
 $j = ($k = 10) + 5;
 var_dump($j, $k); //$k = 15 and $k = 10.
 echo "<br/>";

 //compound assignment operator.
 $l = 10;
 //$l = $l * 2; //assignment opeartor.
 $l *=2;
 echo "$l <br/>";
?>