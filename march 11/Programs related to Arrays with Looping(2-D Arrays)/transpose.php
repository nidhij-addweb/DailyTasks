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
    <h3>Program to print a matrix in its transpose form.</h3>
    <h4>Enter n for nxn  :</h4> 
        <br>
    <b>Matrix :</b>
    Enter Row for matrix  : 
        <input type='number' min='2'
            max='5' name='1r' value='1'/>
            <br><br>
    Enter Column for matrix  : 
        <input type='number' min='2'
            max='5' name='1c' value='1'/><br>
            <br>      
   
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo"<h3>Program to print a matrix in its transpose form.</h3>";
    echo"<br>";
    $d1 = $_POST["1r"];
    $d2 = $_POST["1c"];
    
    echo "matrix  : " . $d1
            . "x" . $d2 . " <br>";
    $m1 = [];
    $n1 = 0;
    for($row = 0; $row < $d1; $row++) {
        for ($col = 0; $col < $d2; $col++) {
            $m1[$row][$col]= $n1++;
        }
    }
    echo "matrix  : ";
    echo "<br>";

    for ($row = 0; $row < $d1; $row++) {
        for ($col = 0; $col < $d2; $col++) {
            echo $m1[$row][$col]." ";
        }
        echo "<br>";
    }
    $a=count($m1);
    $b=count($m1[1]);
    echo "the transpose for the matrix is:"."<br/>";
    for ($row = 0; $row < $a; $row++) {
    for ($col = 0; $col < $b; $col++)
    echo " ".$m1[$col][$row];
    echo "<br/>";
}
}
?>
