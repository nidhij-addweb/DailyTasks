<?php  

echo"Program to check whether a number is Palindrome or not.";
echo"<br>";
$n=$_POST['num'];
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
echo $sum;  
if($n==$sum){  
    echo " Palindrome number";  
    } else {  
    echo "not a Palindrome";  
    }  
  

?>  