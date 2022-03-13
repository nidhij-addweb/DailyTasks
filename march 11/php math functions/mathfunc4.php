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
        <h3>to generate random integer.</h3>
        enter first number for range : <input type="text" name="num1" id="">
        <br><br>
        enter second number for range : <input type="text" name="num2" id="">
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
    $randomnum=rand($n1,$n2);
    echo"random number between $n1 and $n2 is : ".$randomnum;
}?>