<?php

echo "Program to calculate the roots of a quadratic equation.";
echo "<br>";
$a=5;
$b=4;
$c=6;

$d=$b*$b-4*$a*$c;
if($d>=0){
    $x1=(-$b+sqrt($d))/(2*$a);
    $x2=(-$b-sqrt($d))/(2*$a);
    echo"roots are : $x1 . $x2";
}
else{
    $x1=-$b/(2*$a);
    $x2=sqrt(-$d)/(2*$a);
    echo "Roots are: $x1 ± $x2 i"; 
}





?>