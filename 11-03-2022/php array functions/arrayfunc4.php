<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <form method="POST">
    <h3>PHP ARRAY FUNCTIONS</h3>
    <h4>enter array elements</h4>
    enter key element 1 : <input type="text" name="n1" id="">
    value : <input type="text" name="v1" id="">
    <br><br>
    enter key element 2 : <input type="text" name="n2" id="">
    value : <input type="text" name="v2" id="">
    <br><br> 
    enter key element 3 : <input type="text" name="n3" id="">
    value : <input type="text" name="v3" id="">
    <br><br> 
    enter key element 4 : <input type="text" name="n4" id="">
    value : <input type="text" name="v4" id="">
    <br><br> 
    enter key element 5 : <input type="text" name="n5" id="">
    value : <input type="text" name="v5" id="">
    <br><br>
    <h4>enter elements for second array</h4>
    enter element 1 : <input type="text" name="n6" id="">
    <br><br>
    enter element 2 : <input type="text" name="n7" id="">
    <br><br> enter element 3 : <input type="text" name="n8" id="">
    <br><br> enter element 4 : <input type="text" name="n9" id="">
    <br><br> enter element 5 : <input type="text" name="n10" id="">
    <br><br>
    
    
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    
    echo"<br>";
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $v1=$_POST['v1'];
    $v2=$_POST['v2'];
    $v3=$_POST['v3'];
    $v4=$_POST['v4'];
    $v5=$_POST['v5'];
    $tasks=array(
        $n1=>$v1,
        $n2=>$v2,
        $n3=>$v3,
        $n4=>$v4,
        $n5=>$v5);
  
    echo "<br>";
    print_r($tasks);
    echo "<br>";
    echo "<br>";
    $n6=$_POST['n6'];
    $n7=$_POST['n7'];
    $n8=$_POST['n8'];
    $n9=$_POST['n9'];
    $n10=$_POST['n10'];
    $array2=[$n6,$n7,$n8,$n9,$n10];
    print_r($array2);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $merge=array_merge($tasks,$array2);
    echo "merged array : ";
    echo "<br>";
    print_r($merge);
    echo "<br>";
    echo "<br>";
    echo "values in merged array : ";
    $merge=array_values($merge);
    print_r($merge);
    echo "<br>";
    echo "<br>";

    $keys = array_keys($merge);

    print_r($keys);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "subset of merged array";
    echo "<br>";
    print_r(array_slice($merge,3,8));
  

}
?>