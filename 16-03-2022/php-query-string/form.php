<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="get">
        <h3>QUERY STRING-PHP</h3>
        <input type="text" name="name" id="" placeholder="enter name">
        <br><br>
      <input type="email" name="email" id="" placeholder="enter email">
      <br><br>
      <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['email'];
    echo"<a href=action.php?name=$name&email=$email>";
}
?>