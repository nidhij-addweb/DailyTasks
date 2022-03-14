<?php

echo"<h3>Program to input a number in Base ‘x’ and print it in Base ‘y’.</h3>";
echo"<br>";
echo"<br>";

$n=$_POST['num'];
$a=$_POST['a'];
$b=$_POST['b'];
echo"converting $n from base $a to base $b ";
echo"<br>";
echo"<br>";

$convert=base_convert($n,$a,$b);
echo "number converted to base $b : ".$convert;


?>