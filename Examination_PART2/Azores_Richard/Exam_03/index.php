<?php

function Fibonacci($x){
	if(fmod(sqrt($x*$x*5+4),1)==0.0 or fmod(sqrt($x*$x*5-4),1)==0.0){
		echo $x, " is a Fibonacci Number";
}
	else{
		echo $x, " is not a Fibonacci Number";
}
}
 
// get the value of input
$input = $_POST['fibo'];

// call the function
$num = Fibonacci($input);


?>
