<?php
  define("HOST","localhost");
  define("USER","root");
  define("PASS","");
  define("DB","test");

  $con = mysqli_connect(HOST,USER,PASS,DB) or die("Data base is not connected");
  if(!$con){
    die("data base is not connected");
  }

?>