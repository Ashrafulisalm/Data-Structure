<?php
	
	function fact($a1){
		$a=$a1;
		$f=1;
		while($a>1){
			$f=$f*$a;
			$a--;
		}
		echo $f;
		
	}
	
	fact(5);
	
?>