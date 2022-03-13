<?php  
echo"Program to print the factorial of x.";
echo"<br>";
$num=$_POST['num'];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  