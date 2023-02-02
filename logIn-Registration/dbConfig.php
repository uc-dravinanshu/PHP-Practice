<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "regis");

$con = mysqli_connect(HOST,USER,PASS,DB);
if(!$con){
    die("DataBase is not connected..");
}
?>