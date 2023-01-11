<?php
 //for loop.
 for($i=0; $i<=20; $i++) {
    echo $i." , ";
 }
echo "<br/>";
echo "<br/>";

 //print table in for loop.
 $t = 2;
 $m;
for($a=1; $a<=10; $a++) {
     $m = $t * $a;
    //  echo $m."<br/>";
     echo $t. " * ".$a." = ".$m."<br/>";
}

//print 1 to between 100 only even numbers.

$tmp = 0;
for($m = 1; $m <= 100; $m++) {
    if($m%2 == 0) {
        $m++;
    }
}
?>