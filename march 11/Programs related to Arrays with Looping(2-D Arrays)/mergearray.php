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
    <h3>Program to input two arrays and then put them into another (3rd array) after sorting.</h3>
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
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    error_reporting(0);
    echo"<h3>Program to input two arrays and then put them into another (3rd array) after sorting.</h3>";
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
    $s2=sizeof($array2);
    $i = 0;
    $j = 0;
    $k = 0;
    $x = 0;
$y = 0;
$z = 0;
for($i=0; $i<count($array1); $i++)
{
$val = $array1[$i];
$j = $i-1;
while($j>=0 && $array1[$j] > $val)
{
$array1[$j+1] = $array1[$j];
$j--;
}
$array1[$j+1] = $val;
}
for($i=0; $i<count($array2); $i++)
{
$val = $array2[$i];
$j = $i-1;
while($j>=0 && $array2[$j] > $val)
{
$array2[$j+1] = $array2[$j];
$j--;
}
$array2[$j+1] = $val;
}
while ($x < $n1 && $y < $n2)
{
if ($array1[$x] < $array2[$y])
$array3[$z++] = $array1[$x++];
else
$array3[$z++] = $array2[$y++];
}

while ($x < $n1)
$array3[$z++] = $array1[$x++];

while ($y < $n2)
$array3[$z++] = $array2[$y++];

   echo "Array after merging : \n" ;
   for ($i = 0; $i < $n1 + $n2; $i++)
   echo $array3[$i] . " ";
}
?>