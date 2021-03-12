
<?php
	$myarray = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
	$myarray = array_flip($myarray);
	$myarray = array_flip($myarray);
	$myarray= array_values($myarray);
	$arraylength = count($myarray);
	for($x = 0; $x < $arraylength; $x++) {
	  echo $myarray[$x];
	  echo "</br>";
	}
?>

