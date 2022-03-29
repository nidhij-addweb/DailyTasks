<?php
  echo"Program to check whether a 4-digit number is Palindrome or not.";
  echo"<br>";
  $MyNum=1001;
  $revNum = 0;
  $Num = $MyNum;

  while($Num > 0) {
    $digit = $Num % 10;
    $revNum = $revNum * 10 + $digit;
    $Num = (int)($Num / 10);
  }

  if ($MyNum == $revNum){
    echo $MyNum." is a Palindrome number.\n";
  } else {
    echo $MyNum." is not a Palindrome number.\n";
  }


?>