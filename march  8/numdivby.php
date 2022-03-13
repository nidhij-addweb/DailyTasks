<?php
echo "numbers between 101 and 200,divisible by 7"."<br>";
$sum=0;
for($i=101;$i<200;$i++)

{
    if($i%7==0){
        echo $i .",";
        $sum+=$i;
    }
}
echo"<br>";
echo "sum of numbers is ".$sum;

?>