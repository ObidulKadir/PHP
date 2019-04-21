<?php

	function numCheck($num){

			if ($num != 10) {
				throw new Exception("Number is not 10", 1);
				
			}
			return true;
	}
	try{
		numCheck(10);
		echo "you can see that,number is equal to 10";
	}
	catch(Exception $e){
			echo "Error :".$e->getmessage();
	}



?>