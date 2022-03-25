<?php
$sum=0;
$i=0;

do{
// check if the variable is not divisible by 2
if($i%2!=0)
{
$sum = $sum + $i ;
}

$i++;
}
while($i<=10);

// display total output
echo "Sum of odd numbers: " . $sum;
?>