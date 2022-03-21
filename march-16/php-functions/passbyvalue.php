<?php
echo"<h3>PASS BY VALUE - PHP</h3>";
echo"<br>";
$number=16;
function refrencenum($num){
         $num+=10;
         echo "value of variable in function after passing its value ".$num;
}

refrencenum($number);
echo "<br>";
echo "value of variable after pass by value ".$number;


?>