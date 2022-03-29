<?php

echo"Program to convert given number of days into Months & Days.";
echo"<br>";
$d= 375;


$y = (int)($d / 365);
$w = (int)(($d % 365) / 7);
$d = (int)($d - (($y * 365) + ($w)));


echo $y . " Year, " . $w . " Weeks, and " . $d . " Days\n";

?>