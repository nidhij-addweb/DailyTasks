<?php

if(isset($_COOKIE['i'])){
    $c=$_COOKIE['i'];
    $connection=mysqli_connect("localhost","root","","addweb_db_with_queries") or die("error in con");
    $query=mysqli_query($connection,"select * from student_info where s_id=$c") or die('error in view');
    while($row=mysqli_fetch_array($query)){
        
        $id=$row['s_id'];
        $name=$row['s_name'];
        $div=$row['s_divison'];
        $add=$row['s_address'];
 
    }

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
        <label for="id">ID
            <input type="text" name="id" id="" value="<?php echo $id?>" placeholder="enter id">
        </label>
        <br><br>
        <label for="name">NAME
            <input type="text" name="n" id="" 
            value="<?php echo $name?>" placeholder="enter name">
        </label>
        <br><br>
        <label for="division">DIVISION
            <input type="text" name="d" id="" value="<?php echo $div?>" placeholder="enter division">
        </label>
        <br><br>
        <label for="address">ADDRESS
            <input type="text" name="a" id="" value="<?php echo $add?>" placeholder="enter address">
        </label>
        <br><br>
        <input type="submit" name="update" value="update">
    </form>
</body>
</html>

<?php

if(isset($_POST['update'])){
    $s_id=$_POST['id'];
    $s_name=$_POST['n'];
    $s_div=$_POST['d'];
    $s_add=$_POST['a'];
    $connection=mysqli_connect("localhost","root","","addweb_db_with_queries") or die("error in con");
    $query=mysqli_query($connection,"update student_info set s_name='$s_name',s_divison='$s_div',s_address='$s_add' where s_id=$s_id") or die('error in update');
    if($query){
        echo"<script>alert('data updated')</script>";
        header('location:main.php');
    }
    else{
        echo"<script>alert('error in updating')</script>";
    }
}
?>