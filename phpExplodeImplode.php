<?php

 	/*
 	$str = "we are united.";

 	$new = explode(" ", $str);
 	//echo "$new"; ite shows  error.because its a array.
 	print_r($new);
 	*/
 	$str = array("we","are","have");

 	$new = implode(" ", $str);
 	echo "$new";

?>