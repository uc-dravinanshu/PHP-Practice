<?php
//indexed array.
$fruit = array("Apple","Banana","grapes");
$newFruit = array("Sheb","Kela");
$op = array_replace($fruit,$newFruit);

foreach($op as $new){
    echo $new." ";
}
echo "<br/><br/>"; 


//with associative array.
$color = array("R"=>"Red","G"=>"Green","B"=>"Blue");
$hindiColor = array("R"=>"Lal","G"=>"haraa","B"=>"Neela");
$output = array_replace($color, $hindiColor);
foreach($output as $k => $v){
    echo $k." ".$v." ";
}
?>
