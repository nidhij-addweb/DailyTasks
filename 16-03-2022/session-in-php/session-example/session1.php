<?php
echo"SESSION-PHP";
echo"<br>";
session_start();
$_SESSION["name"]="nidhi";
echo"session set successfully";
echo"<br>";

if(isset($_SESSION['name'])){
    echo"<a href='session2.php'>show session</a>";
}

?>

