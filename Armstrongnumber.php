<?php
	function armstrong($number){
		$n=$number;
		$temp=$number;
		$sum=0;
		$power=strlen((string)$n);
		
	while($n >= 1){
		$r=$n%10;
		$sum=$sum+($r**$power);
		$n=$n/10;
	}
	if($sum==$temp){
		echo $temp." is a Armstrong Number";
	} else {
		echo $temp." is not a Armstrong Number";
	}
	}
	
	armstrong(1634);
	echo "<br>";
	armstrong(371);
	echo "<br>";
	armstrong(408);
	echo "<br>";
	armstrong(407);
?>