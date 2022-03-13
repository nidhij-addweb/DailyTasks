<?php
echo"<h3>Program to print the GCD of two values.</h3>";
echo"<br>";
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$gcd=0;

echo "numbers are ". $n1 .",". $n2;
echo "<br>";
for($i=1;$i<=$n1 && $i<=$n2;$i++)
{
    if($n1%$i==0 && $n2%$i==0){
                $gcd=$i;
    }
}
echo "gcd of ".$n1 ." & " .$n2 ." is ".$gcd;



?>