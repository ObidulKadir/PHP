<?php
	$arr1 = array(1 , 2 );

	$arr2 = $arr1;
	$arr2[] = 4;//$arr2 is changed
	// $arr1 is still array(1,2)

	$arr3 = $arr1;
	$arr3[] = 5;
 
 	echo "<pre>";
	print_r($arr1) ;
	echo "</pre>";
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	echo "<pre>";
	echo "<hr>";
	print_r($arr3);
	echo "</pre>";

?> 