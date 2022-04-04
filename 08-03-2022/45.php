<?php
echo"Program to find largest / smallest among n numbers.";
echo"<br>";
$a=$_POST['num1'];
$b=$_POST['num2'];
$c=$_POST['num3'];
$d=$_POST['num4'];
$e=$_POST['num5'];

$numbers = [$a,$b,$c,$d,$e];
$large = $numbers[0];
for ($i = 1; $i < count($numbers); $i++)
{
if ($large < $numbers[$i])
{
$large = $numbers[$i];
}
}
echo "The largest element is: ".$large;
echo "<br>" ;

$small = $numbers[0];
for ($i = 1; $i < count($numbers); $i++)
{
if ($small > $numbers[$i])
{
$small = $numbers[$i];
}
}
echo "The smallest element is: ".$small;
?>