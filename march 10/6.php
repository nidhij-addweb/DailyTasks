<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <form method="POST">
    <h3>Read an array and count total no. of +ve, -ve and zero elements.</h3>
    <h4>enter array elements</h4>
    enter element 1 : <input type="text" name="n1" id="">
    <br><br>
    enter element 2 : <input type="text" name="n2" id="">
    <br><br> enter element 3 : <input type="text" name="n3" id="">
    <br><br> enter element 4 : <input type="text" name="n4" id="">
    <br><br> enter element 5 : <input type="text" name="n5" id="">
    <br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo"<h3>Read an array and count total no. of +ve, -ve and zero eliments.</h3>";
    echo"<br>";
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $array=[$n1,$n2,$n3,$n4,$n5];
    print_r($array);
    echo "<br>";
    $s = sizeof($array);
    $positive_count=0;
    $negative_count=0;
    $zero_count=0;

    for($i=0;$i<$s;$i++){
        if($array[$i]>0){
           $positive_count++;
        }
        else if($array[$i]<0){
            $negative_count++;
        }
        else if($array[$i]==0){
            $zero_count++;
        }
    }
    echo "number of positive elements in array : ".$positive_count;
    echo "<br>";
    echo "number of negative elements in array : ".$negative_count;
    echo "<br>";
    echo "number of zero elements in array : ".$zero_count;
    echo "<br>";


}

?>