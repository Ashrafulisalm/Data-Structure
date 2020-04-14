<?php
	abc(9);
	function abc($a){
		$x=$a;
		echo $x." ";
		if($x){
			abc($x-1);     //Recursion goes here
		}
		echo $x." ";
	}
	
	//Output will -> 9 8 7 6 5 4 3 2 1 0 0 1 2 3 4 5 6 7 8 9
	
?>