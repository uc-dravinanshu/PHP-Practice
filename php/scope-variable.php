<?php
  $x = 10;
//    function show () {
//       global $x;
//       echo $x;
//    }

//    show(); 


//how to use $GLOBALS InsteadOf global keyword.
function show () {
   echo $GLOBALS['x'];
 }

 show();
 
 
?>