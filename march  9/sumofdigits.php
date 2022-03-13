<?php
        echo"<h1>Program to find the sum of digits of an integer number.</h1>";
        echo"<br>";


        $n=$_POST['num'];
        $sum=0; 
        $rem=0;  
        echo "Number is $n " ;
        echo"<br>";
        
        for ($i =0; $i<=strlen($n);$i++)  
        {  
        $rem=$n%10;  
        $sum = $sum + $rem;  
        $n=$n/10;  
  }  
        echo "Sum of digits is $sum"; 
        
?>