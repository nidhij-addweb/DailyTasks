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
    <h4>enter elements for first array</h4>
    enter element 1 : <input type="text" name="n1" id="">
    <br><br>
    enter element 2 : <input type="text" name="n2" id="">
    <br><br> enter element 3 : <input type="text" name="n3" id="">
    <br><br> enter element 4 : <input type="text" name="n4" id="">
    <br><br> enter element 5 : <input type="text" name="n5" id="">
    
    <br><br><br><br>
    <h4>enter elements for second array</h4>
    enter element 1 : <input type="text" name="n6" id="">
    <br><br>
    enter element 2 : <input type="text" name="n7" id="">
    <br><br> enter element 3 : <input type="text" name="n8" id="">
    <br><br> enter element 4 : <input type="text" name="n9" id="">
    <br><br> enter element 5 : <input type="text" name="n10" id="">
    <br><br>
    
    
    <h4>search in array</h4> <input type="text" name="element" id="">
    <br><br> 
 
    
  
    <br><br> 
    <input type="submit" value="submit" name="submit">
    <br><br> 
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
    $array1=[$n1,$n2,$n3,$n4,$n5];
    print_r($array1);
    echo "<br>";
    $s1=sizeof($array1);
    echo"<br>";
    
    $n6=$_POST['n6'];
    $n7=$_POST['n7'];
    $n8=$_POST['n8'];
    $n9=$_POST['n9'];
    $n10=$_POST['n10'];
    $array2=[$n6,$n7,$n8,$n9,$n10];
    print_r($array2);
    echo "<br>";
    echo "<br>";
    echo "matching elements of two array ";
    echo "<br>";
    echo "<br>";

    $array3=array_intersect($array1,$array2);
    foreach($array3 as $a){
        echo "$a <br/>";
    }
    echo "<br>";
    echo "<br>";
    $s=$_POST['element'];

    echo in_array($s,$array1)?"$s found":"not found";
    echo "<br>";
    echo "<br>";
   
    
        $merge=array_merge($array1,$array2);
        echo "merged array : ";
        echo "<br>";
        print_r($merge);
        echo "<br>";
        echo "<br>";

        sort($merge);
        echo"sorted array";
        echo"<br>";
        print_r($merge);
    }

?>