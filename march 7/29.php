<?php

echo"Program to calculate Maximum / Minimum/ Second Maximum out of 4 numbers
(Using ? : Operator)";

echo"<br>";

$num1=34;
$num2=21;
$num3=67;
$num4=12;


$largest=($num1>$num2 && $num1>$num3 && $num1>$num4)?$num1:(($num2>$num3 && $num2>$num4)?$num2:($num3>$num4?$num3:$num4));

echo "largest ".$largest ."<br>";

$smallest=($num1<$num2 && $num1<$num3 && $num1<$num4)?$num1:(($num2<$num3 && $num2<$num4)?$num2:($num3<$num4?$num3:$num4));

echo "smallest ".$smallest."<br>";








?>