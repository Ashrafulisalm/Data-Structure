<?php
	
	function fact($a){
		if($a==0)
			$res=1;
		else
			$res=$a*fact($a-1);			//goes bact to the function-the 1st line
	return $res;
	}
	
	$b=fact(6);
	echo $b;
	
?>