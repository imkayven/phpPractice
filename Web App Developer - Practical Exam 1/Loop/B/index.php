<?php
  
  $x = 0;
  $sum = 0;
  do {

    $x = $x + 1;
    if($x % 2 == 1) {
      $sum = $sum + $x;
    }


  }
  while ($x<10);

  echo $sum;

?>

