<?php

$number = 12345;
$reverse = 0;
while ($number != 0)
{
$reverse = $reverse * 10 + $number % 10;

$number = (int)($number / 10); 
}
 
echo $reverse;

?>