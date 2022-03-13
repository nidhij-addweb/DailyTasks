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
    <h3>Program to find an element in the Array (Binary Searching).</h3>
    <h4>enter array elements</h4>
    enter element 1 : <input type="text" name="n1" id="">
    <br><br>
    enter element 2 : <input type="text" name="n2" id="">
    <br><br> enter element 3 : <input type="text" name="n3" id="">
    <br><br> enter element 4 : <input type="text" name="n4" id="">
    <br><br> enter element 5 : <input type="text" name="n5" id="">
    <br><br>
    <br><br> enter element to search in array : <input type="text" name="element" id="">
    <br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo"<h3>Program to find an element in the Array (Binary Searching).</h3>";
    echo"<br>";
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $array=[$n1,$n2,$n3,$n4,$n5];
    print_r($array);
    echo "<br>";
    
    if(isset($_POST['element'])){
    $element=$_POST['element'];
    echo"searching for element : ".$element;
    echo"<br>";
    $s = sizeof($array);

    $count=0;
    if(isset($array[$element])){
    for($i=0;$i<$s;$i++){
        $middle=$i+($s-$i)/2;
        if($array[$middle]==$element){
           $count++;
        }
        else if($array[$middle]<$element){
            $i=$middle+1;
            $count++;
        }
        else if($array[$middle]>$element){
            $i=$middle-1;
            $count++;
        }
    
    }
}
}
if($count==1){
    echo "element found";
    echo $element;
}
else{
    echo"element not present";
}

}
?>