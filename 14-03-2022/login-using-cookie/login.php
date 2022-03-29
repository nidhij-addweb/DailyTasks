<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST">
        <h3>LOG IN</h3>
		<input type="text" name="username" placeholder="Enter Username">
		<br><br>
        <input type="password" name="password" placeholder="Enter password">
		<br><br>
		<input type="submit" name="login" value="login">
        <br><br>
	</form>
</body>
</html>
<?php
	if(!empty($_POST['username'])){

		$name = ($_POST['username']);
        
		setcookie('username', $name, time()+3600); 
    
		header('refresh:1;url=logout.php');
	}
    elseif(empty($_COOKIE)){
		header('refresh:10');
        echo"cookies not set";
    }
?>