<?php

function datediff($x){
	$years = floor($x / (365*60*60*24));
	$months = floor(($x - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($x - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	printf("%d years, %d months, %d days\n", $years, $months, $days);
}
 
// get the value of input
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
// get positive value of subtracted date
$diff = abs(strtotime($date2) - strtotime($date1));

// call the function
$num = datediff($diff);

?>
