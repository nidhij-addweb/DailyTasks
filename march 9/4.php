<?php
echo"Program to input ages of 10 persons and count the number of persons between age group of 50 and 60";
echo"<br>";
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$a5=$_POST['a5'];
$a6=$_POST['a6'];
$a7=$_POST['a7'];
$a8=$_POST['a8'];
$a9=$_POST['a9'];
$a10=$_POST['a10'];
$ages=[$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10];
$c=0;
$agelen=count($ages);
for($i=0;$i<$agelen;$i++){

    if($ages[$i]>=50&&$ages[$i]<=60){
        $c++;
    }
}
echo "the number of persons between age group of 50 and 60 : ".$c;




?>