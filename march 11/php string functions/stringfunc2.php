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

    $sen=$_POST['longsen'];
    echo "long sentence is :".$sen;
    echo "<br>";
    echo "number of words in a string : ".str_word_count($sen);
    echo "<br>";

    echo "reversed string is : ".strrev($s);
    echo "<br>";


}

?>