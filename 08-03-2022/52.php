<?php
echo"Program to compute Square root using Iteration (without using sqrt( ) library function).";
echo"<br>";
$n=$_POST['num'];
$squareroot;
echo "entered number is ".$n ."<br>";
$squareroot=$n/2;
$temp=0;
while($squareroot!=$temp){
    $temp=$squareroot;
    $squareroot=($n/$temp+$temp)/2;
}
echo "squareroot of number is ".$squareroot;
?>