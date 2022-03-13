<?php 
echo"Program to print Fibonacci series.";
echo"<br>";

$num = 0;  
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];  

 
echo "<h3>Fibonacci series</h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 6 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; 
} 
?>  
