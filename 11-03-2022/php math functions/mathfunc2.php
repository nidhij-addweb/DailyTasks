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
        enter dividend number : <input type="text" name="num1" id="">
        <br><br>
        enter divisor number : <input type="text" name="num2" id="">
        <br><br>
        <input type="submit" value="submit" name="submit">
        <br><br>
    </form>
</body>
</html>

<?php


if(isset($_POST['submit']))
{
 
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    $r=(fmod($n1,$n2));
    echo "remainder (modulo) is : ".$r;
    echo "<br>";
    echo "rounded down value is : ".(floor($r));
    echo "<br>";
    echo "rounded up value is : ".(ceil($r));
    echo "<br>";
    echo "rounded up value with precision and modes : ";
    echo "<br>";
    echo(round($r, 2, PHP_ROUND_HALF_UP));
    echo "<br>";

    echo(round($r, 1, PHP_ROUND_HALF_DOWN));
    echo "<br>";

    echo(round($r, 0, PHP_ROUND_HALF_EVEN));
    echo "<br>";

    echo round($r, 3, PHP_ROUND_HALF_ODD);
    
    echo "<br>";
    echo "value is finite or not : ".(is_finite(($r)));
    echo "<br>";
    echo "value is finite or not : ".(is_infinite((log(0))));
}
?>