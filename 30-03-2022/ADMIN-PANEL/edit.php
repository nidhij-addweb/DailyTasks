<?php


if(isset($_GET['email'])){
    $ee=$_GET['email'];
    
    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection,"select * from signin_tbl where s_email='$ee'") or die('error in edit query');
    while($row=mysqli_fetch_array($query)){
        
        $name=$row['s_name'];
        $username=$row['s_username'];
        $email=$row['s_email'];
        $mobile=$row['s_mobile'];
        $password=$row['s_password'];
    }
}

else{
    header('location:login.php');
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
    <form method="post">
        <label for="id">NAME
            <input type="text" name="n" id="" value="<?php echo $name?>" placeholder="enter id">
        </label>
        <br><br>
        <label for="name">USERNAME
            <input type="text" name="u" id="" 
            value="<?php echo $username?>" placeholder="enter name">
        </label>
        <br><br>
        <label for="division">EMAIL
            <input type="text" name="e" id="" value="<?php echo $email?>" placeholder="enter division" disabled>
        </label>
        <br><br>
        <label for="address">MOBILE
            <input type="text" name="m" id="" value="<?php echo $mobile?>" placeholder="enter address">
        </label>
        <br><br>
        <label for="address">PASSWORD
            <input type="text" name="p" id="" value="<?php echo $password?>" placeholder="enter address">
        </label>
        <br><br>
        <input type="submit" name="update" value="update">
    </form>
</body>
</html>
<?php

if(isset($_POST['update'])){
    $u_n=$_POST['n'];
    $u_u=$_POST['u'];
    $u_m=$_POST['m'];
    // $u_e=$_POST['e'];
    $u_p=$_POST['p'];
    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection,"update signin_tbl set s_name='$u_n',s_username='$u_u',s_mobile='$u_m',s_password='$u_p' where s_email='$email'") or die('error in update');
    if($query){
        echo"<script>alert('data updated')</script>";
        header('location:dashboard.php');
    }
    else{
        echo"<script>alert('error in updating')</script>";
    }
}
?>