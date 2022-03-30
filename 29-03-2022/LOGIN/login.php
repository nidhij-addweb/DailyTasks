<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="POST">
        <h3>LOGIN</h3>
        <b>Enter username </b>

        <input type="text" name="name"><br>
        <br>

        <b>Enter password </b>

        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="login" value="log in">
    </form>
</body>
</html>
<?php

if(isset($_POST['login'])){
    $uname=$_POST['name'];
    $upass=$_POST['password'];
    $cname='c';
    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection," select * from signin where s_name='$uname' and s_password='$upass'") or die('error in insert');
    $rows=mysqli_num_rows($query);
    if($rows>0){
       echo"<script>alert('logged in successfully')</script>";
       setcookie($cname,$uname,time()+3600);
       
       header('location:welcome.php');
    }
    else{
       echo"<script>alert('error in logging')</script>";
    }  
}

?>