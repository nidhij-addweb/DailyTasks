<?php
echo" <h1>Program to input n numbers and print</h1>
<h3>(a) the Sum of all n numbers.
    (b) the Sum of square of all even numbers.
    (c) the Sum of cubes of all odd numbers.</h3>";
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$n3=$_POST['num3'];
$n4=$_POST['num4'];
$n5=$_POST['num5'];
echo "input numbers are " .$n1.",".$n2.",".$n3.",".$n4.",".$n5;

echo "<br>";
$sum=$n1+$n2+$n3+$n4+$n5;
$even_sum=0;
$odd_sum=0;

$numbers=[$n1,$n2,$n3,$n4,$n5];
echo "sum of all numbers : ".$sum;
$numlen=count($numbers);
echo "<br>";
for($i=0;$i<$numlen;$i++){
if($numbers[$i]%2==0){
    echo "even number : ".$numbers[$i];
    echo "<br>";
    $even_sum+=($numbers[$i]*$numbers[$i]);
   
}elseif(!$numbers[$i]%2==0){
    echo "odd number : ".$numbers[$i];
    echo "<br>";
    $odd_sum+=($numbers[$i]*$numbers[$i]*$numbers[$i]);
}
}
echo "Sum of square of all even numbers : ".$even_sum;

echo "<br>";

echo "Sum of cubes of all odd numbers : ".$odd_sum;





?>