<?php

echo"<h3>Read an array and print sum of its elements.</h3>";
echo"<br>";
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$sum=0;
$array=[$n1,$n2,$n3,$n4,$n5];
print_r($array);
echo "<br>";
$arraylen=count($array);
for($i=0;$i<$arraylen;$i++){
    $sum+=$array[$i];
    
}
echo "sum of elements of array is ".$sum;



?>