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

    <label for="id">ID
            <input type="text" name="id" id="" placeholder="enter id to update">
    </label>
    <input type="submit" name="edit" value="edit">
    </form>
</body>
</html>
<?php

if(isset($_POST['edit'])){
    $eid=$_POST['id'];
    setcookie('i',$eid,time()+3600);
    if(isset($_COOKIE)){
        header('location:view.php');
    }
}


?>