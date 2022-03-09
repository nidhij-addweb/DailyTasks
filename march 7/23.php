<?php

echo"Program to check whether a number is a 4-digit number or not.";
echo"<br>";
$num=1234;
$count=0;
while(!$num==0){
    $num=round($num/10);
    ++$count;
}
if($count==4){
    echo "yes,number is 4 digit";
}else{
    echo "number is not 4 digit number";
}


?>