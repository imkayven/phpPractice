<?php

$input0 = "0-0-0";
$input1 = "0-0-0";

if(isset($_POST['submit']))
{
  $input0=$_POST['inputbox1'];
  $input1=$_POST['inputbox2'];

  
  $date1 = strtotime($input0);  
  $date2 = strtotime($input1);  
    
 
  $diff = abs($date2 - $date1);  
    
  $years = floor($diff / (365*60*60*24));  
    
  $months = floor(($diff - $years * 365*60*60*24) 
                                 / (30*60*60*24));  
    
  $days = floor(($diff - $years * 365*60*60*24 -  
               $months*30*60*60*24)/ (60*60*24)); 
     
  // print the result 
  printf("%d years, %d months, %d days", $years, $months, 
               $days);  

}


?>

<html>
  <body>
    <form action="" method="post">
      DATE1:
      <input name="inputbox1" type="text"><br>
      DATE2:
      <input name="inputbox2" type="text"><br>
      <input name="submit" value="Difference" type="submit"><br>
    </form>
  </body>
</html>

