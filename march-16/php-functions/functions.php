<?php
echo"<h3>FUNCTIONS-PHP</h3>";
echo"<br>";
function info($name,$date=16){
    echo"hello ".$name;
    echo"<br>";
    $year=2022;
    $date=$date."-".$year;
    echo $date;
}

info("Nidhi");


?>