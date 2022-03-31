<?php

header('refresh:1');

if(isset($_GET['email'])){
    
    $del=$_GET['email'];
    echo $del;
$connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
$query=mysqli_query($connection,"delete from signin_tbl where s_email='$del'") or die('error in delete');
if($query){
    echo"<script>alert('data deleted')</script>";
    header('location:dashboard.php');
}
}
if(isset($_GET['email'])){
     header('location:dashboard.php');
}

?>