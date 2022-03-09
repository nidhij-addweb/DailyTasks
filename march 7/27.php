<?php
echo"Program to print a character from keyboard and then print it in reverse case.";
echo"<br>";
$char = 'e';

if (ctype_lower($char))
	echo "reverse case " . strtoupper($char);

else
	echo "reverse case " . strtolower($char);


?>