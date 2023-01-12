<?php
//function with parameter and argument and return.
//yes argu and yes return.
declare(strict_types=1);
function sum(int|float $a, int|float $b) {
     $c = $a + $b;
     return $c;
}
echo sum(5.2,5.5);

?>