<?php

  if(isset($_POST['submit']))
  {
    $input0=$_POST['inputbox1'];
    $reverse = strrev($input0);
    echo $reverse;
  }

?>


<html>
  <body>
    <form action="" method="post">
      TEXT HERE:
      <input name="inputbox1" type="text"><br>
      <input name="submit" value="REVERSE" type="submit"><br>
    </form>
  </body>
</html>

