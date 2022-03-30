<?php
if(isset($_COOKIE)){
echo "<h3>Logged in successfully</h3>";
echo "<h3>welcome $_COOKIE[c]</h3>";
}
if(isset($_POST['logout'])){
    header('location:signin.php');
    setcookie('c',"",time()-60);
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
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>
