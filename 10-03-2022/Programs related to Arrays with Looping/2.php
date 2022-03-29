<?php
echo"<h3>Read an array and print reverse of its elements.</h3>";
echo"<br>";
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$n3=$_POST['num3'];
$n4=$_POST['num4'];
$n5=$_POST['num5'];
$sum=0;
$array=[$n1,$n2,$n3,$n4,$n5];
print_r($array);
echo "<br>";


$s = sizeof($array);
for($i=0; $i<$s; $i++)
{
$temp=$array[$i];
$array[$i]=$array[$s-1];
$array[$s-1]=$temp;
$s--;
}
echo "Reverse of  ";
print_r ($array);




?>