<?php
session_start();

if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $upass=$_POST['password'];
    // $cname='c';
    $_SESSION['email']=$email;
    // if(isset($_POST['remember'])){
    //     setcookie('username',$uname,time()+3600);
    // }
    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection," select * from signin_tbl where s_email='$email' and s_password='$upass'") or die('error in insert');
    $rows=mysqli_num_rows($query);
    if($rows>0){
       echo"<script>alert('logged in successfully')</script>";
    //    setcookie($cname,$uname,time()+3600);
       header('refresh:1');
       
       header('location:dashboard.php');
    }
    else{
    
       echo"error in logging";
    }  
}
if(isset($_POST['signin'])){
    header('location:signin.php');
}
?>


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
        <b>Enter email </b>

        <input type="text" name="email"><br>
        <br>

        <b>Enter password </b>

        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="login" value="log in">
        <input type="submit" name="signin" value="sign in">

        <br><br>
        <b>REMEMBER ME </b><input type="checkbox" name="remember" value="remember me" id="">
        <br><br>
    </form>
</body>
</html>
