<?php
echo"<h3>GLOBAL VARIABLES-PHP</h3>";
echo"<br>";
$start="global variables ";
$end="in PHP ";
$date=16;
$month=03;

function combine(){
    global $start , $end , $date;
    echo"<h3>$start  $end  $date</h3>";
}

function datemonth(){
    $GLOBALS['date']=$GLOBALS['date']."/".$GLOBALS['month'];
}
echo combine();
echo "<br>";
datemonth();
echo $date;
echo "<br>";


?>