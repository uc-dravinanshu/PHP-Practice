<?php
  //error handling/
 if(!file_exists("welcome.txt")) {
    die("file not found");
 } else {
   echo "file found";
 }
?>