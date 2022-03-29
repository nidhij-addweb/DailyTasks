<?php

if(!isset($_COOKIE['username'])){
		
    header('refresh:1;url=login.php');

}  
if(isset($_COOKIE['username'])){
   
    echo"<h3>logged in successfully</h3>";
	echo "<b>welcome </b>";
    echo"<br>";

    echo"<b>username : </b>".$_COOKIE['username'];
    echo"<br>";
   
    echo"<br>";
    if(count($_COOKIE) > 0){
        echo "There are ".count($_COOKIE). " cookies saved<br>";
    } else {
        echo "There are no cookies saved";
        echo"<br>";
    }
    
    echo"<br>";
    echo"<br>";
    echo '<form method="post">';
    echo'<input type="submit" name="logout" value="logout"></form>';

}
if(isset($_POST['logout'])){
    if(isset($_COOKIE["username"])){
       
        setcookie("username","",time()-60);
        
        header('refresh:1;url=login.php');
        
}
}
?>


