<?php
  
  $x = 0;
  $sum = 0;

  while (true){
  //block of statements
    if($x == 10) {
      break;
    }

    $x = $x + 1;
    if($x % 2 == 0) {
      $sum = $sum + $x;
    }
  }

  echo $sum;

?>

