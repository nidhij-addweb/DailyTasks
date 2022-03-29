<?php
echo"Program to show 5 arithmetic operations on two integer numbers using Switch-case.";
echo"<br>";
$num1=67;
$num2=23;

$operation=5;

		switch($operation)
		{
		case 1: echo "You selected addition";
                echo "<br>";
				$ans=$num1+$num2;
		        echo $num1." + ".$num2." = ".$ans;
				break;
		case 2: echo "you selected sub";
                echo "<br>";
                $ans=$num1-$num2;
		        echo $num1." - ".$num2." = ".$ans;
				break;	
		case 3:echo "you selected multiplication";
                echo "<br>";
                $ans=$num1*$num2;
                echo $num1." * ".$num2." = ".$ans;
                break;
		case 4:echo "you selected division";
               echo "<br>";
               $ans=$num1/$num2;
               echo $num1." / ".$num2." = ".$ans;
               break;
        case 5:echo "you selected module";
               echo "<br>";
               $ans=$num1%$num2;
               echo $num1." % ".$num2." = ".$ans;
               break;
		default: echo "<strong>Have a good day.</strong>";
		}




?>