
<?php
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

$numbers1 = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($numbers1);
$arrlength1 = count($numbers1);
$new_numbers1 = array("");
for($x = 0; $x < $arrlength1; $x++) {

	if(isOdd($numbers1[$x]) == true) {
		$roundoff_number = round($numbers1[$x],-1);
		array_push($new_numbers1, $roundoff_number);
	}
	else {
		array_push($new_numbers1, $numbers1[$x]);
	}
}

echo "</br>";
echo "----- round off and ascending order ------";
echo "</br>";

$arrlength1 = count($numbers1);
for($x = 0; $x <=$arrlength1; $x++) {
  echo $new_numbers1[$x];
  echo "<br>";
}

//echo print_r($new_numbers1);
function isOdd ($number) {
	$remainder = $number % 2;
	if($remainder != 0){
		return true;
	}
	else {
		return false;
	}
}


?>

