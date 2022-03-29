<?php

echo"Program to calculate the time given in Seconds into hours, minutes and seconds.";
echo"<br>";
$sec=36555;
$h=floor($sec/3600);

$s=($sec-(3600*$h));

$m=floor($s/60);


echo "hours : " .$h;
echo "<br>";
echo "minutes : " .$m;
echo "<br>";

echo "second : ". $s;
echo "<br>";

?>