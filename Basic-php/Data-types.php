<?php
 //declred strict typed.
 declare(strict_types=1);
 function sum1(int $x, int $y) {
     var_dump($x,$y);
     echo "<br/>";
     return $x + $y;
 }
 echo sum1(2,2);

 //data types & type casting in PHP-8.0.

  // scalare data types. 
    $score = 11;
    echo $score." data type = ".gettype($score)."<br/>";

    $price = 12.12;
    echo $price." data type = ".gettype($price)."<br/>";

    $name = "Dravinanshu Mishra";
    echo $name." data type = ".gettype($name)."<br/>";

    $completed = true;
    echo $completed." data type = ".gettype($completed)."<br/>";

    //with using var_dump () methods.
        var_dump($completed);
        echo "<br/>";
        var_dump($score);
        echo "<br/>";
        var_dump($price);
        echo "<br/>";
        var_dump($name);
        echo "<br/>";

    //compound type.
    $arr = [1,2,3,4,5.5,true];
    print_r($arr);
    echo "<br/>";

    //type casting in php.
    $num = (float) '2.5';
    var_dump($num);
  

   



?>