<html>
    <body>
        <form action="" method="post">
            <h3><?php session_start(); echo "welcome ".$_SESSION['name'];?></h3>
            <input type="submit" value="logout" name="logout">
        </form>
    </body>
</html>
<?php
if(isset($_SESSION['name'])){
    if(isset($_POST['logout'])){
        session_start();
        session_destroy();
        header('refresh:1');
        header('location:login.php');
    }
   
}elseif(!isset($_SESSION['name'])){
    header('location:login.php');
}

?>
