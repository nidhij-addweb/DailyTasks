<?php

echo"Program to input number of the month of a year and print how many days are there in the month.";
echo"<br>";
$month_num=6;
switch($month_num){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo("31 Days.");
            break;
      
        
        case 4:
        case 6:
        case 9:
        case 11:
            echo("30 Days.");
            break;
      
        
        case 2:
            echo("28/29 Days.");
            break;
      
        default:
            echo("Invalid Month.");
            break;
}





?>