<?php

echo"Program to find largest / smallest number among three numbers";
echo"<br>";
$x=10;
$y=64;
$z=45;
if($x>$y&&$x>$z){
      echo "largest ".$x;
}
else if($y>$x&&$y>$z){
      echo "largest ".$y;
}
else{
      echo "largest ".$z;
}


?>