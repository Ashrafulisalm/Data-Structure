<?php
	function bubble_sort($number){
		//print the array
		echo "Array is: ";
		foreach($number as $value){
			echo $value.", ";
		}
		echo "<br>";
		
		$n=count($number);
		for($i=0;$i<$n-1;$i++){
			for($j=0;$j<$n-1-$i;$j++){
				if($number[$j]>$number[$j+1]){				//if current node is greater then the next
					$temp=$number[$j];						
					$number[$j]=$number[$j+1];				//Swap it
					$number[$j+1]=$temp;
				}
			}
		}
		
		//print Sorted Array
		echo "Sorted Array is: ";
		foreach($number as $value){
			echo $value.", ";
		}
		echo "<br>";
		
	}
	
	bubble_sort([5,7,9,1,3,2,5,4,3,12,14,54,34,23,75,20,22,44,10]);
	
	bubble_sort([4,02,78,5,89,9,2,1,11,12,24]);
?>