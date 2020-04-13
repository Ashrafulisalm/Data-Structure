<?php 
	function binary_search($number, $value){
		//print the array
		echo "In Array:[ ";
		foreach($number as $val){
			echo $val.",";
		}
		
		
		$n=count($number);
		$l=0;    								//Initial left node
		$r=$n-1;								//Initial right node
		$result=false;
		while($l<$r && !$result){				//while not result
			$m=round(($l+$r)/2);				//Calculate the mid node
			if($number[$m]==$value){			//compare the value with mid
				echo "] -> ".$value." is found";
				echo "<br>";
				$result=true;
			} elseif($value>$number[$m]){		
				$l=$m+1;						//Chenge the left node
				}					 
			else{
				$r=$m-1;						//Chenge the right node
				}				
			}
			if(!$result){
				echo "] -> ".$value." Not found";
				echo "<br>";
			}
	}
	
	binary_search([1,2,3,4,6,7,8,9,11,13,15,20],13);
	
	binary_search([2,4,6,8,11,13,15,16,20,21,32,45],5);
	
	binary_search([2,4,6,8,11,13,15,16,20,21,32,45],21);
	
?>