<?php 
echo"Program to print the sum of all digits of a 4-digit number";
echo"<br>"; 
$num = 1459;  
$sum=0; 
$rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
   $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits is $sum";  
 ?>  