<?php
// create a function for adding the two consecutive numbers
function Fibonacci($number){	
	// if and else if to generate first two numbers
	if ($number == 0)
		return 0;	
	else if ($number == 1)
		return 1;	
	
	// Recursive Call to get the upcoming numbers
	else
		return (Fibonacci($number-1) +
				Fibonacci($number-2));
}

// limit only to 10 numbers output
$number = 10;
echo "Fibonacci Sequence: ";
for ($counter = 0; $counter < $number; $counter++){
	echo Fibonacci($counter),' ';
}
?>
