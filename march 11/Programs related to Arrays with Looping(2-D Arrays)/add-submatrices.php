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
    <h3>Program to compute the addition/subtraction of 2 Matrices.</h3>
    <h4>Enter n for nxn  :</h4> 
        <br>
    <b>Matrix 1:</b>
    Enter Row for matrix 1 : 
        <input type='number' min='2'
            max='5' name='1r' value='1'/>
            <br><br>
    Enter Column for matrix 1 : 
        <input type='number' min='2'
            max='5' name='1c' value='1'/><br>
            <br>
    <b>Matrix 2:</b>

    Enter Row for matrix 2:
            <input type='number' min='2'
            max='5' name='2r' value='1'/>
            <br><br>
    Enter Column for matrix 2 : 
    
    <input type='number' min='2'
            max='5' name='2c' value='1'/>
            <br><br>       
   
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo"<h3>Program to compute the addition/subtraction of 2 Matrices.</h3>";
    echo"<br>";
    $d1 = $_POST["1r"];
    $d2 = $_POST["1c"];
    $d3 = $_POST["2r"];
    $d4 = $_POST["2c"];
    echo "matrix 1 : " . $d1
            . "x" . $d2 . " <br>";
    $m1 = [];
    $n1 = 0;
    echo "matrix 2 : " . $d3
    . "x" . $d4 . " <br>";
    $m2 = [];
    $n2 = 0;
    for($row = 0; $row < $d1; $row++) {
        for ($col = 0; $col < $d2; $col++) {
            $m1[$row][$col]= $n1++;
        }
    }
    echo "matrix 1 : ";
    echo "<br>";

    for ($row = 0; $row < $d1; $row++) {
        for ($col = 0; $col < $d2; $col++) {
            echo $m1[$row][$col]." ";
        }
        echo "<br>";
    }
    for($row = 0; $row < $d3; $row++) {
        for ($col = 0; $col < $d4; $col++) {
            $m2[$row][$col]= $n2++;
        }
    }
    echo "matrix 2 : ";
    echo "<br>"; 

    for ($row = 0; $row < $d3; $row++) {
        for ($col = 0; $col < $d4; $col++) {
            echo $m2[$row][$col]." ";
        }
        echo "<br>";
    }
    $a=count($m1);
    $b=count($m1[1]);
    $c=count($m2);
    $d=count($m2[1]);
    echo "the addition of matrices is:"."<br/>";
    for ($row = 0; $row < $a; $row++) {
    for ($col = 0; $col < $d; $col++)
    echo " ".$m1[$row][$col]+$m2[$row][$col]." ";
    echo "<br/>";
}
    echo "the subtraction of matrices is:"."<br/>";
    $result=array();
    for ($i=0; $i < $a; $i++) {
    for($j=0; $j < $d; $j++){
    $result[$i][$j] = 0;
    for($k=0; $k < $b; $k++)
    $result[$i][$j] += $m1[$i][$k] - $m2[$k][$j];
}
}
    for ($row = 0; $row < $a; $row++) {
    for ($col = 0; $col < $d; $col++){
    echo " ".$result[$row][$col];
    }
    echo "<br/>";
    }
}
?>