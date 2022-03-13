<?php
echo"Program to input a 4-digit number and print its entire digits individual.";
echo"<br>";
$num=$_POST['num'];
echo "4 digit number = $num<br>";
$digit1=$num/1000%10;
$digit2=$num/100%10;
$digit3=$num/10%10;
$digit4=$num%10;

echo "digit " .$digit1."<br>"."digit ".$digit2."<br>"."digit ".$digit3."<br>"."digit ".$digit4;


?>