<?php
if(isset($_COOKIE)){
// print_r($_COOKIE);
echo "<h3>Saved Cookies</h3>";
if(count($_COOKIE) > 0){
       
    $counter=count($_COOKIE);
    echo"<br>";
    echo 'There are '.$counter. ' cookies saved.<br>';
} else {
    echo 'There are no cookies saved<br>';
}
foreach($_COOKIE as $v=>$value){
    echo "<br>cookie values : ".$value;
    echo"<br>";
    }

}else{
    echo"create cookies";
}


?>