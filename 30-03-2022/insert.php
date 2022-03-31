<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" style="text-align: center;">
        <b>Enter name </b>
        <input type="text" name="name" required><br>
        <br>
        <b>Enter username </b>
        <input type="text" name="uname" required><br>
        <br>
        <b>Enter mobile </b>
        <input type="text" name="mobile" required><br>
        <br>
        <b>Enter email </b>

        <input type="email" name="email" required><br>
        <br>
        <b>Enter password </b>

        <input type="text" name="password" required><br>
        <br>
        <input type="submit" name="add" value="add user">
        

    </form>
</body>
</html>
<?php
    
header('refresh:10');

if(isset(($_POST['add']))){
    header('refresh:1');
    
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $mobile=$_POST['mobile'];

    $uemail=$_POST['email'];

    $upass=$_POST['password'];

    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection,"insert into signin_tbl values('$name','$uname',$mobile,'$uemail','$upass')") or die('enter data');
    if($query){
       echo"<script>alert('data added successfully')</script>";
       header('location:dashboard.php');
    }
    else{
       echo"<script>alert('error in inserting data')</script>";
    }
    mysqli_close($connection);
}

if(empty($_POST['name'])){
    header('location:login.php');
}
?>