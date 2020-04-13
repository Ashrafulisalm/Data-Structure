<?php
	function insertion_sort($number){
		//print the array
		echo "Array is: ";
		foreach($number as $value){
			echo $value.", ";
		}
		echo "<br>";
		$n=count($number);
		for($i=1;$i<$n;$i++){
			$item=$number[$i];						//set the i'th number in item 
			$j=$i-1;
			while($j>=0 && $number[$j]>$item){		//while current index is greater then item
				$number[$j+1]=$number[$j];			//right shift by one index
				$j=$j-1;
			}
			$number[$j+1]=$item;
		}
		//print Sorted Array
		echo "Sorted Array is: ";
		foreach($number as $value){
			echo $value.", ";
		}
		echo "<br>";
	}
	
	insertion_sort([3,2,5,1,7,9,4,5,11,33,12]);
?>