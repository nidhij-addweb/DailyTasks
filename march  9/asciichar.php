<?php  
  echo" <h3>Program to print all ASCII codes with their     corresponding ASCII characters</h3>";
  echo"<br>";
  $c1=$_POST['c1'];
  $c2=$_POST['c2'];

    for ($i=$c1; $i <=$c2; $i++) { 
        echo $i.":". utf8_encode( chr($i) )."<br>";
    }

?>