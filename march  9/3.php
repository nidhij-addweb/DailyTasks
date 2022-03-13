<?php
echo"Program to compute the grades of n students according to the following";
echo"<br>";
$n=$_POST['num'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
echo"roll number is".$n;
echo"<br>";
$total=(($m1+$m2+$m3+$m4+$m5)*100);
$per=round($total/500);
while($per>35){
    if($per>80&&$per<=100){
      echo "honours";
    }
    else if($per=60&&$per<=79){
        echo "first division";
    }
    else if($per=50&&$per<=59){
        echo "second division";
    }
    else if($per=40&&$per<=49){
        echo "second division";
    }
    else{
        echo "fail";
    }
    
}

?>