<?php

echo"Program to print the sum of all the even and odd between two given numbers.";
echo"<br>";
$e_sum=0;
$o_sum=0;
$sum=0;
$n1=$_POST['num1'];
$n2=$_POST['num2'];
for($i=$n1;$i<=$n2;$i++){
    if($i%2==0){
      echo "even number : ". $i."<br>";
      $e_sum+=$i;
      $sum+=$i;
    }
    else{
      echo "odd number : ". $i."<br>";
      $o_sum+=$i;
      $sum+=$i;
    }
}
echo "sum of even numbers : ". $e_sum."<br>";
echo "sum of odd numbers : ".$o_sum."<br>";

echo "sum of all even and odd numbers : ".$sum;


?>