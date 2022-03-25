<?php
$name = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');

$new_arr = array_count_values($name); //count function to count the frequency of value
$final_numbers = array();
foreach($new_arr as $x => $val) {
	if ($val ==1){ //checl if count is only one
    	array_push($final_numbers,$x); 
    }  
        }
echo "<pre>";
   print_r($final_numbers); // display unique value
echo "</pre>";

?>