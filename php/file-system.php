<?php
 $dir = scandir(__DIR__);
 var_dump($dir);
 echo "<br/><br/>";
 //
 if(!file_exists('foo.txt')) {
     file_put_contents('foo.txt','hello word');
     clearstatcache();
     echo filesize('foo.txt');
 } else {
    echo 'File not found';
 }
 
?>