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
        <h3>PHP String Functions</h3>
        enter string : <input type="text" name="string" id="">
        <br><br><br><br>
       <textarea name="longsen" id="" cols="50" rows="20" placeholder=" enter long sentence :"></textarea>
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php


if(isset($_POST['submit']))
{
 
    $s=$_POST['string'];
    echo "string is :".$s;
    echo "<br>";
    echo "string in lowercase : ".strtolower($s);
    echo "<br>";
    echo "string in uppercase : ".strtoupper($s);
    echo "<br>";
    echo "length of string is : ".strlen($s);
    echo "<br>";

    $sen=$_POST['longsen'];
    echo "long sentence is :".$sen;
    echo "<br>";
    $shortsen=substr($sen,6,5).'....';
    echo "part of string : ".$shortsen;
    echo "<br>";
    $repsen=str_replace('the','THE',$sen);
    echo "replaced string ".$repsen;
    echo "<br>";
    $pos=strpos($repsen,'THE');
    echo "position ".$pos;
    echo "<br>";
    echo "SHA-1 hash of string value is : ".sha1($s);
    echo "<br>";
    echo "md5 hash of string value is : ".md5($s);
    echo "<br>";
    echo "first character of string value is uppercase : ".ucfirst($s);
    echo "<br>";
    echo "first character of string value is lowercase : ".lcfirst($s);
    

}

?>