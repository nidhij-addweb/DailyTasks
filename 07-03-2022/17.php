<?php

echo"Program to calculate the Gross Salary when Basic Salary is given. The allowances HRA(%) ,DA (%),
PF and Medical are also given. Add the HRA and DA in the Basic Salary but deduct PF and Medical
from the Salary.";
echo"<br>";

$salary = 10000;
$hra = 0.40 * $salary;
$da = 0.20 * $salary;
$pf = 0.03 * $salary;
$medical = 0.02 * $salary;

$grosssalary = ($salary + $hra + $da) - ($pf+$medical);
echo "Gross Salary = ".$grosssalary.",";
echo "<br>";
echo "Where DA is 40% and HRA is 20% and PF is 3% and Medical is 2%";

?>