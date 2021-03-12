<?php

$result = 0;
$golden = 34/21;
  
for($i=0; $i<=10;$i++) { 

  $result = $golden**$i;
  $result1 = 1-$golden;
  $result1 = $result1**$i;
  $result =  $result - $result1;
  $result = $result/sqrt(5);
  echo round($result) . "</br>";
}


?>

