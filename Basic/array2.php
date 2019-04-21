<?php

	$array = array(1,2,3,4,5);
	print_r($array);

//delete values from array
	foreach ($array as $i => $value) {
		# code...
		unset($array[$i]);
	}
	print_r($array);

	$array[] = 6;
	print_r($array);

	//array re-index

	$array = array_values($array);
	$array[] = 7;
	print_r($array);

	echo "<br>";

	$a = array( 1 => 'one' , 2 => 'two' ,3 => "three" ,4 =>'four' );

	unset($a[2]);
	print_r($a);

	$b = array_values($a);
	print_r($b);

	$color = array('red', 'blue');

	foreach ($color as $key => $value) {
		# code...
		echo "Do u like a $color[$key]?\n";
	}

	echo "<br>";

	

	foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color); /* ensure that following writes to
$color will not modify the last array element */

print_r($colors);


 ?>