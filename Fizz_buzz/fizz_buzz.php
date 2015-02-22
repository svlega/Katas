<?php

 for($i=1;$i<100;$i++)
 {
	echo '<br>';
	$threeexists = 0;
	$fivexists = 0;
	for($j=$i; $j>0 && $i>10; $j=$j/10)
	{
		$digit = $j%10;
		if ($digit == 3)
			$threeexists = 1;
		if ($digit == 5)
			$fivexists = 1;
	}
	
	if($i%5 == 0 && $i%3 == 0)
		echo 'Fizz Buzz';			
	else if($i%3 == 0 || $threeexists == 1)
		echo 'Fizz';
	else if($i%5 == 0|| $fivexists == 1)
		echo 'Buzz';		
	else
		echo $i;
 }
 
?>
