<html> 
  <head> 
    <title>PHP COOKIES</title> 
 </head> 
<body> 
    <h3>php cookies</h3>
<?php 
if (!isset($_COOKIE['count'])) { 
 
  $cookie = 1;
  echo "Welcome! This is your first visit.<br> $cookie"; 
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page ".$_COOKIE['count']." times."; 
  }
?> 
  </body> 
</html>