<?php

echo"Program to print the series 1, 0, 1, 0, 1, 0, ……………… n.";
echo"<br>";
$num=$_POST['num'];
for($i=0;$i<=$num;$i++){
    if($i%2==0){
        echo "0,";
    }else{
        echo"1,";
    }
}



?>