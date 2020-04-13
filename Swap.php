<?php
	function swap($a,$b){
		$x=$a;
		$y=$b;
		echo "Previous Value: ".$x.", ".$y;
		
		$x=$x+$y;
		$y=$x-$y;
		$x=$x-$y;
		echo "<br>";
		echo "After Swap Value: ".$x.", ".$y;
		echo "<br><br>";
	}
	
	swap(4,7);
	swap(3,10);
	
	
?>