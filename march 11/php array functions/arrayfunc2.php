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
    enter element 1 : <input type="text" name="n1" id="">
    <br><br>
    enter element 2 : <input type="text" name="n2" id="">
    <br><br> enter element 3 : <input type="text" name="n3" id="">
    <br><br> enter element 4 : <input type="text" name="n4" id="">
    <br><br> enter element 5 : <input type="text" name="n5" id="">
    <br><br>
    <br><br> 
    enter search element  : <input type="text" name="element" id="">
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
    $array=[$n1,$n2,$n3,$n4,$n5];
    print_r($array);
    echo "<br>";
    $s=$_POST['element'];
    $key=array_search($s,$array);
    echo "$s found at position ".$key;
    echo "<br>";
    echo is_array($array)?'array':'not an array';
    echo "<br>";
    echo is_array($n1)?'array':'not an array';
    echo "<br>";
    echo "<br>";
    $s=sizeof($array);
    echo "size of array is ".$s;
    echo "<br>";
    echo "<br>";
    echo "after removing last element ";
    echo "<br>";

    array_pop($array);
    print_r($array);
    array_shift($array);
    echo"<br>";
    echo"removing first element";
    echo"<br>";
    print_r($array);
    echo "<br>";
    echo "<br>";
    function addOne($a){
        return ($a+1);
    }
    $array=array_map('addOne',$array);
    echo "array after adding one to each element <br>";
    print_r($array);
    echo "<br>";
    echo "<br>";
    
}
?>