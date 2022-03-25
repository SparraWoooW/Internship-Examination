<?php
$name = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
arsort($name);  //sort it descending

$new_arr = array_count_values($name); //count fi=unction to count the frequency of value
$final_name = array();
foreach($new_arr as $x => $val) {
	if ($val ==(max($new_arr))){
    	array_unshift($final_name,$x); //having the highest frequency push in the begining
        }
    else{
    	array_push($final_name,$x); 
    }  
        }
echo "<pre>";
   print_r($final_name);
echo "</pre>";

?>