<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="" method="post">
          <input type="text" name="sid" id="" placeholder="enter id to delete">
          <input type="submit" value="delete" name="delete">
      </form>
</body>
</html>
<?php

if(isset($_POST['delete'])){
    $sid=$_POST['sid'];
    $connection=mysqli_connect("localhost","root","","addweb_db_with_queries") or die("error in con");
    $query=mysqli_query($connection,"delete from student_info where s_id=$sid") or die('error in delete');
    if($query){
        echo"<script>alert('data deleted')</script>";
        header('location:view.php');

    }
    else{
        echo"<script>alert('error in deleting')</script>";
    }
   
}
?>