<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <b>Enter username </b>
        <input type="text" name="name"><br>
        <br>
        <b>Enter password </b>

        <input type="text" name="password"><br>
        <br>
        <input type="submit" name="signin" value="sign in"><br><br>
        <b>Log in if signed up </b>
        <input type="submit" name="login" value="log in">

    </form>
</body>
</html>
<?php

if(!empty(($_POST['name']))){
    $uname=$_POST['name'];
    $upass=$_POST['password'];

    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection,"insert into signin values('$uname','$upass')") or die('error in insert');
    if($query){
       echo"<script>alert('signed in successfully')</script>";
    }
    else{
       echo"<script>alert('error in inserting')</script>";
    }
    mysqli_close($connection);
}
if(isset($_POST['login'])){
    header('location:login.php');
}


?>