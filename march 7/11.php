<?php

echo"Program to calculate the Simple Interest and Compound Interest.";
echo"<br>";
$p=5;
$t=7;
$r=9;

$si=$p*$t*$r/100;

echo "simple interest = ".$si;

echo "<br>";

$amount=$p*pow((1+$r/100),$t);

$ci=$amount-$p;
echo "compound interest = ".$ci;




?>