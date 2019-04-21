<?php
		
		$int = 150;
		$min = 1;
		$max = 200;

		if (filter_var($int, FILTER_VALIDATE_INT , array("options" => array("min_range" => $min,"max_range"=> $max)))) {
			echo "Its valid range";
			
		}else{
			echo "Its not valid range";
		}

?>