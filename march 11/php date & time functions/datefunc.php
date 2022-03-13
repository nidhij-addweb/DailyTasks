<?php
echo"<h2>PHP DATE FUNCTIONS</h2>";
echo"Default timezone used by all date/time functions : ";
echo"<br>";
date_default_timezone_set("Asia/Calcutta");
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
echo"<br>";
$today = date("d/m/Y");
echo "current date and time : ".$today. "<br>";
echo" date/time information of the current local date/time : ";
echo"<br>";


print_r(getdate());
echo"<br>";

echo date("d-m-Y") . "<br>";
echo date("d.m.Y")."<br>";
echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");
echo "<br>";
$timestamp = time();
echo(date("F d, Y h:i:s", $timestamp));
echo "<br>";
echo" full date and time : ";
echo date("r");
echo "<br>";
echo"current time is am or pm : ";
echo date("a");
echo "<br>";
echo"current time is AM or PM : ";
echo date("A");
echo "<br>";
echo" hour without leading zeroes [1 to 12] : ";
echo date("g");
echo "<br>";
echo" hour without leading zeroes [0 to 23] : ";
echo date("G");
echo "<br>";
echo"day of the month with leading zeroes [01 to 31] : ";
echo date("d");
echo "<br>";
echo"first 3 letters of the day name [Sub to Sat] : ";
echo date("D");
echo "<br>";
echo"day name of the week [Sunday to Saturday] : ";
echo date("l");
echo "<br>";
echo" month number with leading zeroes [01 to 12] : ";
echo date("m");
echo "<br>";
echo"number of days in a month [28 to 31] : ";
echo date("t");
echo "<br>";
echo"month name [January to December] : ";
echo date("F");
echo"<br>";
echo"four digit year format : ";
echo date("Y");
echo"<br>";
echo"two (2) digits year format (00 to 99) : ";
echo date("y");
?>