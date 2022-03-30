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
       <h3>CRUD USING MYSQL</h3>
        <b>INSERT DATA  </b><input type="submit" name="insert" value="insert"><br><br>
        <b>VIEW DATA  </b><input type="submit" name="view" value="view"><br><br>
        <b>EDIT DATA  </b><input type="submit" name="update" value="update"><br><br>
        <b>DELETE DATA  </b><input type="submit" name="delete" value="delete"><br><br>
   </form>
    
</body>
</html>

<?php
if(isset($_POST['insert'])){
    header('location:insert.php');
}
if(isset($_POST['view'])){
    header('location:view.php');
}
 if(isset($_POST['update'])){
     header('location:update.php');
}
  if(isset($_POST['delete'])){
     header('location:delete.php');
}
 ?>