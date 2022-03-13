<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h3>PHP Math Functions </h3>
        enter number : <input type="text" name="num" id="">
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php


if(isset($_POST['submit']))
{
 
    $n=$_POST['num'];
    echo "number is :".$n;
    echo "<br>";

    echo "absolute value of number is : ".(abs($n));
    echo "<br>";
    echo "value of pi() : ".pi();
    echo "<br>";
    echo "the degree value of given radian value (pi) : ".(deg2rad(pi()));
    echo "<br>";
    echo "the radian value of given degree value as input : ".(deg2rad($n));
    echo "<br>";
    $bin=(base_convert($n,10,2));
    echo "binary number of given number is : ".$bin;
    echo "<br>";
    echo "binary number of given number is : ".(bindec($bin));
    echo "<br>";



}


?>