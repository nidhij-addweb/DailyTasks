<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Read an array and count total no. of even and odd elements.</h3>
    <form method="POST">
    
    <h4>enter array elements</h4>
    enter element 1 : <input type="text" name="n1" id="">
    <br><br>
    enter element 2 : <input type="text" name="n2" id="">
    <br><br> enter element 3 : <input type="text" name="n3" id="">
    <br><br> enter element 4 : <input type="text" name="n4" id="">
    <br><br> enter element 5 : <input type="text" name="n5" id="">
    <br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo"Read an array and count total no. of even and odd elements.";
    echo"<br>";
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$array=[$n1,$n2,$n3,$n4,$n5];
print_r($array);
echo "<br>";
$even_count=0;
$odd_count=0;

$s = sizeof($array);

                
for($i=0;$i<$s;$i++){
    if($array[$i]%2==0)
    {
        $even_count++;
    }
    else if(!$array[$i]%2==0)
    {
        $odd_count++;
    }
    }

echo "number of even elements is ".$even_count;
echo "<br>";
echo "number of odd elements is ".$odd_count;
}
?>