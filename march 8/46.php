<?php

echo"Program to check whether a number is Prime number or not.";
echo"<br>";
$number = $_POST['num'];  
$count=0;  
for ( $i=1; $i <= $number; $i++)  
{  
if (($number % $i)==0)  
{  
$count++;  
}  
}  
if ($count < 3)  
{  
echo "$number is a prime number.";  
}
else
{
echo "$number is not a prime number."; 
}
?>