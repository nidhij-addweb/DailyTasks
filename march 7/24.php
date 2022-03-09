<?php
echo"Program to calculate Billing amount for a telephone customer according to given slabs";
echo"<br>";


$units=200;
if($units<50){
    echo "billing amount ".$units*100;
}
elseif($units>=51&&$units<=100){
    echo "billing amount ".$units*101;
}
elseif($units>=101&&$units<=200){
    echo "billing amount ".$units*101.50;
}
elseif($units>=201&&$units<=300){
    echo "billing amount ".$units*102;
}
elseif($units>=300){
    echo "billing amount ".$units*102.50;
}
else{
    echo "enter valid billing unit";
}






?>