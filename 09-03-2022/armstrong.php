<?
echo"<h3>Program to print all the Armstrong numbers between the range of integer.</h3>";
echo"<br>";
$n1=$_POST['num1'];
$n2=$_POST['num2'];

	
		$sum=0;
		print("Armstrong numbers between $n1 to $n2 are: ");
        echo"<br>";
	    
		for($i=$n1; $i<=$n2; $i++)
		{
			$num=$i;
			$sum=0;
			$len=strlen($i); 
			while($num>0)
			{
			   $rem=$num%10;
			   $power=pow($rem,$len);
			   $sum=$sum+$power; 
			   $num=$num/10;  
			}
			if($sum==$i)
			{
				echo $i . " is armstrong number <br/>";
			}			
		}		
	
	?>