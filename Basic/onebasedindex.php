<?php
	
	$first = array('shayan' => 10 ,'kadir' => 20);

	var_dump($first);
	print_r($first);
	foreach ($first as $key => $value) {
		# code...
		echo "String index is:" .$first[$key];
		echo "<br>";
	}

	echo "<br>";

	$firstquarter = array(1 => 'january','february', 'March');

	print_r($firstquarter);

	$FamilyName = array('Shayan' => 6 ,'Roton' => 3,'Saifan' => "9 month" );

	foreach ($FamilyName as $key => $value) {
		# code...
		echo "<br>";
		echo "FamilyName is [$key] = " .$FamilyName[$key];
	}


?>