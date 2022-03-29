<?php
echo"Program to find second largest among 3 / 4 numbers.";
echo"<br>";

$x=10;
$y=34;
$z=45;

if($x>$y&&$x>$z){
    if($y<$x&&$y>$z){
        echo"second largest ".$y; 
    }else{
        echo"second largest ".$z; 
    }
}
else if($y>$x&&$y>$z){
    if($z<$y&&$z>$x){
        echo"second largest ".$z; 
    }
    else{
        echo"second largest ".$x; 
    }
}
else{
    if($y<$z&&$y>$x){
        echo"second largest ".$y; 
    }
    else{
        echo"second largest ".$x; 
    }
}




?>