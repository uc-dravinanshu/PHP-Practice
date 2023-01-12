<?php
    $color  = array("red","green","blue","dark","yellow");
    
    if(in_array("red",$color, true)){
        echo "True! find successFully";
    }else{
        echo "false ! Can't Find";
    }
    echo "<br/><br/>";

    //with associative array.
    $fruit = array("A"=>"Apple","B"=>"Banana","G"=>"Grapes");
    if(in_array("Guava",$fruit)){
        echo "True";
    }else{
        echo "false";
    }
?>
