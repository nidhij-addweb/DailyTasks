<?php
session_start();

if(isset($_SESSION['email'])){
    $e=$_SESSION['email'];
    $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
    $query=mysqli_query($connection,"select * from signin_tbl where s_email='$e'") or die('error in query');
    while($row=mysqli_fetch_array($query)){
        
        echo "<h3>WELCOME ".$row['s_name']."</h3>";
       
    }
}
// if(isset($_COOKIE)){
//     echo "<h3>welcome ". $_COOKIE['username'] ."</h3>";
// }
?>


<?php
 $connection=mysqli_connect("localhost","root","","db_with_query") or die("error in con");
 $query=mysqli_query($connection,"select * from signin_tbl ") or die('error in view');
 header('refresh:1');
 

 echo"<table border=2><tr><td>NAME</td><td>USERNAME</td><td>MOBILE</td><td>EMAIL</td><td>PASSWORD</td><td colspan=2>ACTION</td></tr>";

 while($row=mysqli_fetch_array($query)){
    header('refresh:1');
    
    $eemail=$row['s_email'];
    echo "<tr>";
    echo "<td>".$row['s_name']."</td>";
    echo "<td>".$row['s_username']."</td>";
    echo "<td>".$row['s_mobile']."</td>";
    echo "<td>".$row['s_email']."</td>";
    echo "<td>".$row['s_password']."</td>";
    if($eemail==$e){
        echo "<td></td>";
        echo "<td></td>";
    }else{
    echo "<td>"."<a href=edit.php?email=$eemail>EDIT</a>"."</td>";
    echo "<td>"."<a href=delete.php?email=$eemail>DELETE</a>"."</td>";

    echo "</tr>";
    
    }
}
echo"</table>";
echo "<br>";

if(isset($_POST['add'])){
    header('location:insert.php');
}

if(isset($_POST['logout'])){
    
    session_destroy();
    header('location:login.php');
}
if(empty($_SESSION['email'])){
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
   <form action="" method="POST">
       
        <b>ADD USER  </b><input type="submit" name="add" value="add"><br><br>
        <input type="submit" value="logout" name="logout">
        
   </form>
    
</body>
</html>