<?php
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($numbers); // arrange ascending
$final_numbers=array();
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  array_push($final_numbers,round($numbers[$x], -1));  //round off to the nearest tenths and store in array
}
echo "<pre>";
   print_r($final_numbers); // display array
echo "</pre>";
?>
