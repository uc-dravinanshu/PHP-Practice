<?php
//function with no argment no parameter no return.
function printline() {
    for($i=1; $i<=10; $i++) {
        echo "__LINE__";
    }
}
echo printline();

?>