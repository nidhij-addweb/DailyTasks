<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">
    <h3>Read an array and print sum of elements stored at even indexes.</h3>
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
    echo"<h3>Read an array and print sum of elements stored at even indexes.</h3>";
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
    $count=0;   
    $sum=0;  
    for($i=2;$i<$s;$i++){
        if($i%2==0){
            $sum+=$array[$i]; 
            $count++;                   
        }
                   
    }
    echo"sum of elements stored at even indexes : ".$sum;

}
?>