<?php
//while loop.

//first way.
$i = 0; //first initialization
while ($i <= 15) {   //condition.
    echo $i."<br/>";
    $i++;  //increment.
}

//second way.
$j = 0;
while (true) {
    if($j >= 15) {
       break;
    }
    echo $j++."<br/>";
}


//third way.
$k = 0;
while($k <= 15) {
    if($k%2 === 0) {
        $k++;
        continue;
      }
      echo $k++." , ";
    }
   // 1,3,5,7,9,11,13,15. 


//     //while conditions.
//   $k = 0;
//   while($k <= 15) {
//       if($k == 5) {
//           $k++;
//           break;
//         }
//         echo $k++." , ";
//       }
//       echo "<br/><br/>";
?>