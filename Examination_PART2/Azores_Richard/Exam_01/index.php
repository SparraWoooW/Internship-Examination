<?php

// to check palindrome you can reverse the word and comapare it to the original word
// if these two are equal then it is palindrome

function palindrome($x){
	echo 'Input String: '. $x;
	//reverse the input using strrev
	$reverse = strrev($x);
	echo '<br> Reverse String: '. $reverse;
	//condition to check if the input and the reverse of the string is equal or not
	if($x == $reverse) {
	echo '<br> '.$x.'  is a palindrome';
	}
	else {
	echo '<br>'.$x.' is not a palindrome';
	}
}
 
// get the value of input
$input = $_POST['palin'];

// call the function
$num = palindrome($input);

?>

