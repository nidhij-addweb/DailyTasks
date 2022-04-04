<?php
echo"Program to reverse and sum of the digits of any number.";
echo"<br>";
$num = $_POST['num1'];  
echo "number is ".$num."<br>";
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of entered number is ". $revnum;
echo"<br>";
$number = $_POST['num2'];  

$sum=0; 
$remainder=0;  
     for ($i =0; $i<=strlen($number);$i++)  
     {  
     $remainder=$number%10;  
     $sum = $sum + $remainder;  
     $number=$number/10;  
     }  
echo "Sum of digits  of entered number is ".$sum;  

?>