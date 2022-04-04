<?php
echo" <h3>Program to input a number into decimal number system and then print its equivalent binary.</h3>";
echo"<br>";
$n=$_POST['num'];
echo "decimal number is ".$n;

echo "<br>";

$binarynumber;
$i=0;
while($n>0){
    $binarynumber[$i]=$n%2;
    $n=(int)($n/2);
    $i++;
}

for($j=$i-1;$j>=0;$j--){
    echo $binarynumber[$j];
}




?>