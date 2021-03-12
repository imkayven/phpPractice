<?php

$input0 = "";

if(isset($_POST['submit']))
{
  $input0=$_POST['inputbox1'];

  if(Palindrome($input0) == true) {
    echo $input0;
    echo " is a Palindrome";
  }
  else {
      echo $input0;
    echo " is NOT a Palindrome";
  }  
}


function Palindrome($input) {
  $reverse = strrev($input);
  if($reverse == $input) {
    return true;
  }
  else
  {
    return false;
  }
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

