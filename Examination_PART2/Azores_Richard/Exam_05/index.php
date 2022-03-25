<?php
function reverse($x){
	//reverse the input using strrev
	$reverse = strrev($x);
	echo '<br> Output: '. $reverse;
}
 
// get the value of input
$input = $_POST['revers'];

// call the function
$num = reverse($input);

?>

