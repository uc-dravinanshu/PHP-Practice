<?php
$food = array("orange","apple","banana","grapes");
  echo array_search("grapes",$food);
 # In the case of index array, it returns index number.

 echo "<br><br>";

  $fruit = array("a"=>"Apple","b"=>"Banana","g"=>"Grapes");

  echo array_search("Banana",$fruit);
 #In the case of associative array, it returns its key.

?>
