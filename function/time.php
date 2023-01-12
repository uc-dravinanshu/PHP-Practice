<?php
 //time 
  echo "Hour is = ".date("h")."<br/>";
  echo "Hour is = ".date("H")."<br/>";
  echo "Hour is = ".date("g")."<br/>";
  echo "Hour is = ".date("G")."<br/>";
  echo "<br/>";


  //minut show.
  echo "minute is = ".date("i")."<br/>";

  //seconds show.
  echo "second is = ".date("s")."<br/>";

  //show maridien.
  echo "maridien is = ".date("a")."<br/>";
  echo "maridien is = ".date("A")."<br/>";


  //show with together.
  echo "Time is = ".date("h:i:sa e")."<br/>";
  echo "Time & date= ".date("d-m-Y h:i:sa e")."<br/>";
  
  //by default php set server timezone so this problem solved.
  //set timezone. goto php time zone, official site.

  date_default_timezone_set("Asia/Kolkata");
  echo "Time is = ".date("h:i:sa")."<br/>";
  echo "Time & date= ".date("d-m-Y h:i:sa")."<br/>";

  //how tocheck timezone.
  echo "Time is = ".date("h:i:sa e")."<br/>";
  echo "Time & date= ".date("d-m-Y h:i:sa e")."<br/>";

  
?>