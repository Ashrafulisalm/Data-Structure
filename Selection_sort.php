<?php
	function selection_sort($number){
		echo "Array is: ";
		foreach($number as $value){
			echo $value." ";
		}
		echo "<br>";
		
		$n=count($number);
		for($i=0;$i<$n-1;$i++){
			$index_min=$i;									//Let first-index is the Minimum
			for($j=$i+1;$j<$n;$j++){
				if($number[$j]<$number[$index_min]){		//if not then
					$index_min=$j;							//chenge the min index
				}
			}
			if($index_min!=$i){								//if the current index is not the min
				$temp=$number[$i];								
				$number[$i]=$number[$index_min];			//Swap the min with index i
				$number[$index_min]=$temp;
			}
		}
		echo "Sorted Array is: ";
		foreach($number as $value){
			echo $value." ";
		}
	}
	
	selection_sort([4,6,2,3,1,5,9,6,11,13,14,45,67,44,32]);
	
?>