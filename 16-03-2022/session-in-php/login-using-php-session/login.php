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
        <h3>login</h3>
        <input type="text" placeholder="enter username" name="username" required>
        <br><br>
        <input type="password" name="password" placeholder="enter password" id="" required>
        <br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php

if(isset($_POST['login'])){
    session_start();
    $name=$_POST['username'];
    $_SESSION['name']=$name;
    echo"session set";
    header('refresh:1');
    header('location:logout.php');
}
?>