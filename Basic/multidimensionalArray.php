<?php
	
	$fruits = array(

			"fruit" => array ("a"=>"Orange",
							"b"=> "Mango",
							"c" => "LIci" ),
			"Number" => array (1,2,3,4,5,6),
			"holes"  => array (
								"first",
								5=>"second",
								"third")


			);

	echo $fruits["fruit"]["a"];
	echo "<br>";

	echo $fruits["holes"][5];
	echo "<br>";
	print_r($fruits);

	unset($fruits["holes"][0]);

	$first = array_values($fruits);

	echo "<br>";

	print_r($first);


?>