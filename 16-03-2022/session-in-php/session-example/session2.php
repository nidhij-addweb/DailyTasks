<?php
session_start();
echo"name is ".$_SESSION['name'];
echo"<br>";
print_r($_SESSION);
if(isset($_POST['destroy'])){
    header('location:session3.php');
}
?>
<html>
    <body>
        <form action="" method="POST">
        <input type="submit" value="clear" name="destroy">
        </form>
    </body>
</html>
