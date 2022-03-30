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
        <label for="id">ID
            <input type="text" name="id" id="" placeholder="enter id">
        </label>
        <br><br>
        <label for="name">NAME
            <input type="text" name="name" id="" placeholder="enter name">
        </label>
        <br><br>
        <label for="division">DIVISION
            <input type="text" name="division" id="" placeholder="enter division">
        </label>
        <br><br>
        <label for="address">ADDRESS
            <input type="text" name="address" id="" placeholder="enter address">
        </label>
        <br><br>
        <input type="submit" name="insert" value="insert">
    </form>
</body>
</html>

<?php

if(isset($_POST['insert'])){
   $s_id=$_POST['id'];
   $s_name=$_POST['name'];
   $s_div=$_POST['division'];
   $s_add=$_POST['address'];
   $connection=mysqli_connect("localhost","root","","addweb_db_with_queries") or die("error in con");
   $query=mysqli_query($connection,"insert into student_info values($s_id,'$s_name','$s_div','$s_add')") or die('error in insert');
   if($query){
       echo"<script>alert('data inserted')</script>";
       header('location:view.php');
   }
   else{
       echo"<script>alert('error in inserting')</script>";
   }
   mysqli_close($connection);
};

?>