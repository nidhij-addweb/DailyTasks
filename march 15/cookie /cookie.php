<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <h3>PHP COOKIES</h3>
    <form method="post">
        <b>Create cookie  </b>
        <input type="submit" name="create" value="Create" id="">
        <br><br>
        <b>View cookie  </b>
        <input type="submit" name="view" value="view" id="">
        <br><br>
        <b>Edit cookie  </b>
        <input type="submit" name="edit" value="edit" id="">
        <br><br>
        <b>Delete cookie  </b>
        <input type="submit" name="delete" value="delete"id="">
        <br><br>
        
    </form>
</body>
</html>



<?php
if(isset($_POST['create'])){
    header('location:create.php');
}
if(isset($_POST['view'])){
    header('location:view.php');
}   
if(isset($_POST['edit'])){
    header('location:edit.php');
}
if(isset($_POST['delete'])){
    header('location:delete.php');
}
?>