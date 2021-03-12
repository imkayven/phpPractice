<?php

$input0 = "";

if(isset($_POST['submit']))
{
  $input0=$_POST['inputbox1'];

  $numberA = "";
  $numberB = "";

  $numberA = 5*$input0**2+4;
  $numberB = 5*$input0**2-4;

  if(isPerfectSquare($numberA) == true or isPerfectSquare($numberB) == true ) {
    echo $input0;
    echo " is a Fibonacci Number";
  }
  else {
    echo $input0;
    echo " is NOT Fibonacci Number";
  } 
}


function isPerfectSquare($n) 
{ 
  for ($i = 1; $i * $i <= $n; $i++) {
      if (($n % $i == 0) && ($n / $i == $i)) {
          return true;
      }
  }
  return false; 
} 
?>


<html>
  <body>
    <form action="" method="post">
      INPUT HERE:
      <input name="inputbox1" type="text"><br>
      <input name="submit" value="CHECK" type="submit"><br>
    </form>
  </body>
</html>

