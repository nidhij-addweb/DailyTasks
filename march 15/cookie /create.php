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
        <h3>Create cookie</h3>
        <b>name : </b>
        <input type="text" name="name" id="" placeholder="enter cookie name">
        <br><br>
        <b>value : </b>
        <input type="text" name="value" id="" placeholder="enter cookie value">
        <br><br>
        <input type="submit" value="create" name="createcookie">
    </form>
</body>
</html>

<?php

if(isset($_POST['createcookie'])){
    if(isset($_POST['name'])){
        $cookie_name=$_POST['name'];
        $cookie_value=$_POST['value'];

        setcookie($cookie_name,$cookie_value,time()+3600);
        header('location:cookie.php');
        if(!empty($_COOKIE[$cookie_name])){
            echo"<br>";
            echo"<b>cookie created</b>";
           
        }
    }
   
}

?>