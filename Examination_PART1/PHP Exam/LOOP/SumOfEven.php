<?php
$sum=0;
$i=0;

while($i<=10)
{
// check if the variable is divisible by 2
if($i%2==0)
{
$sum = $sum + $i ;
}

$i++;
}
// display total outpot
echo "Sum of even numbers: " . $sum;
?>