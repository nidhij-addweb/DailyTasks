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
        <h3>PHP Math Functions</h3>
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
    echo "square root of number is : ".(sqrt($n));
    echo "<br>";
    echo "binary number of given number is : ".(decbin($n));
    echo "<br>";
    
    echo "hexadecimal number of given number is : ".(dechex($n));
    echo "<br>";
    echo "octal number of given number is : ".(decoct($n));
    echo "<br>";
   

}

?>