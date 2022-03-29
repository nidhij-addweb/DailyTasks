<?php  
echo"Program to reverse a 4-digit number.";
echo"<br>";
$num = 2345;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number is: $revnum";  
?>  