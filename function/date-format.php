<?php
//date format in PHP.
echo "Today is ".Date("d")."<br/>";
echo "Today is ".Date("j")."<br/>";
echo "Today is ".Date("jS")."<br/>";

echo "<br/>";
echo "Today is ".Date("F")."<br/>";
echo "Today is ".Date("m")."<br/>";
echo "Today is ".Date("n")."<br/>";
echo "Today is ".Date("M")."<br/>";

echo "<br/>";
echo "Today is ".Date("y")."<br/>";
echo "Today is ".Date("Y")."<br/>";


//how to show full date.
echo "full date is = ".date("d/m/Y")."<br/>";
echo "full date is = ".date("Y/M/d")."<br/>";


//week show.
echo "week Day is".date("D")."<br/>";
echo "week Day is".date("l")."<br/>";
echo "week Day is".date("n")."<br/>";


// z ==> tell year is 365 day, today which day.
echo "day of 365 day is = ".date("z")."<br/>";
//how to get week of 52 week in a year. current.
echo "week of the year in 52 weeks = ".date("W")."<br/>";
//in current months, how many days 
echo "in current months, how many days = ".date("t")."<br/>";
 // if yes 1 if not 0 (zero).
 echo "Is this leep year = ".date("L")."<br/>";
?>