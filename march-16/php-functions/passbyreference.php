<?php
echo"<h3>PASS BY REFRENCE - PHP</h3>";
echo"<br>";
$number=16;
function refrencenum(&$num){
         $num+=10;
         echo "value of variable in function after passing its reference ".$num;
}

refrencenum($number);
echo"<br>";
echo "value of variable after pass by reference ".$number;


?>