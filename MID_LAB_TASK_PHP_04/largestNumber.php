<?php

$number1 = 2;
$number2 = 6;
$number3 = 5;

 if ($number1>$number2 && $number1>$number3)
 	{
 		echo $number1." is the largest number";
 	}
 elseif ($number2>$number1 && $number2>$number3)
 	{
 		echo $number2." is the largest number";
 	}
 	else 
 	{
 		echo  $number3." is the largest number";
 	}
?>