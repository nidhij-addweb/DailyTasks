<?php

echo"Program to calculate the perimeter and area of a triangle when sides are given.";
echo"<br>";

$a=3;
$b=3;
$c=4;

$p=$a+$b+$c;
echo "perimeter of triangle ".$p;

$s=$p/2;
$a=sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

echo " area of triangle ".$a;

?>