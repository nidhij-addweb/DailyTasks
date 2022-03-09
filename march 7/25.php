<?php

echo"Program to check whether a scanned character is a digit, an alphabet or a special character.";
echo"<br>";

$char='J';

if (($char >='A '&& $char <= 'Z')
		|| ($char >=' a' && $char <= 'z'))
		echo " Alphabet " .$char;
	
	
else if ($char >= 0 && $char <= 999999)
	    echo " Digit " .$char;

	
else								
	echo " Special Character " .$char;



?>
