<?php
//do while loop.
$a = 1;
do {
    echo $a." , ";
    $a++;
}while($a <= 15);
echo "<br/><br/>";


//print a table.
$t = 2;
$m;
$a = 1;
do {
    $m = $a * $t;
    echo $t." * ".$a." = ".$m."<br/>";
    $a++;
}while($a<=10);


?>