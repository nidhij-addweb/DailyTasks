<?php
echo"<h3>STATIC VARIABLES-PHP</h3>";
echo"<br>";
function staticvariable(){
    static $number=1;
    echo "value of static number ".$number;
    echo "<br>";
    $num=2;
    echo "value of non-static variable ".$num;
    echo "<br>";
    $number++;
    $num++;
    echo "value of incremented static number ".$number."<br>";
    echo "value of incremented non-static variable ".$num."<br>";
}

staticvariable();

staticvariable();

?>