<?php
  $a = function(){
    echo "welcome to the anonymous functions";
  };
  $a ();

  echo "<br/>";

  //anonymous function with parameter and argument.
  $x = 10;
  $y = function ($x1){
     echo "This is Anonymous Functions $x1 <br/>";
  };
  $y($x);


   //second way to access anonymous function.
   $m = 20;
   $n = function () use ($m){
     echo "This is second way to access anonymous function.$m";
   };
   $n();


?>