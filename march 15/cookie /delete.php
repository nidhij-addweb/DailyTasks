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
        <h3>Delete cookie</h3>
        <b>name : </b>
        <input type="text" name="name" id="" placeholder="enter cookie name">
        <br><br>
        <input type="submit" value="delete" name="deletecookie">
    </form>
</body>
</html>
<?php
 
if(isset($_POST['deletecookie'])){
if(isset($_POST['name'])){
   
    $cookie_name=$_POST['name'];
    setcookie($cookie_name,"",time()-60);
    header('Location:cookie.php');
    echo"cookie deleted";
    
}
elseif(!isset($_COOKIE['name'])){
    header('location:cookie.php');
        echo"create cookie first";
    }
}
?>