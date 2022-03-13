<?php
echo"Program to print the series 1, 4, 7, 10, 13, ………n.";
echo"<br>";

$r=$_POST['num'];
for($i=1;$i<=$r;$i+=3){
    echo $i . ","  ;
}



?>