<?php 
	function linear_search($number, $value){
		$n=count($number);
		$result=false;
		for($i=0;$i<$n;$i++){
			if($number[$i]==$value){ 
				$result=true;
				break;
			}
		}
		if($result){
				echo $value." is Found ";
			} else {
				echo "Not found ";
			}
	}
	
	linear_search([2,4,6,3,8,1,5,9],5);
	linear_search([2,4,6,7,4,6,2,3,8,1,5,9],45);
	linear_search([2,4,6,3,8,1,5,8,45,21,12,54,9],45);



?>