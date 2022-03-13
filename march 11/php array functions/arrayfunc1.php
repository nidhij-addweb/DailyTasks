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
    <b>enter element to add:</b>
    <br>
    value : <input type="text" name="e2" id="">
    
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
    echo "<br>";
    echo"interchanging keys and values of tasks";
    echo "<br>";
    echo "<br>";
    print_r(array_flip($tasks));
    echo "<br>";
    echo "<br>";

 
    echo "upper case of all keys : ";
    echo "<br>";

    print_r((array_change_key_case($tasks,CASE_UPPER)));
    echo "<br>";
    echo "<br>";

    echo "lower case of all keys : ";
    echo "<br>";

    print_r((array_change_key_case($tasks,CASE_LOWER)));
    echo "<br>";
    echo "<br>";
    
    echo "tasks in parts : ";
    echo "<br>";

    print_r(array_chunk($tasks,2));
    echo "<br>";
    echo "<br>";
    echo "number of tasks  : ".count($tasks);
    echo "<br>";
    
    $sortTasks=sort($tasks);
    echo "sorted tasks ";
    echo "<br>";
    foreach($tasks as $task){
        echo "$task.. <br> ";
    }
    
    echo "<br>";
    echo "<br>";
    $revTasks=array_reverse($tasks);
    echo "Reversed tasks ";
    echo "<br>";
    foreach($revTasks as $task){
        
        echo "$task <br> ";
    }
    if(isset($_POST['e2'])){
    $e2=$_POST['e2'];
    array_push($tasks,$e2);
    print_r($tasks);
    }
    echo "<br>";
    echo "<br>";
    echo "task of the day : ".$tasks[array_rand($tasks)];
}
  

    ?>