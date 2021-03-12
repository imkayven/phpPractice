
<?php     
      
    $array = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian"); 
    $array_freq = array_count_values($array);     
     arsort($array_freq); 
     $new_array = array_keys($array_freq);
     //echo "hello"; 
     echo "The Most number occurrence  is:"." ".$new_array[0]; 
     echo "</br>";
     echo $new_array[0] . "  " .  $new_array[1] . "  " . $new_array[2];
?> 


