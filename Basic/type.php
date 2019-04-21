<?php

	$a_bool = TRUE;
	$a_str = "foo";
	$a_str2 = 'foo';
	$a_int = 12;
	$a_float = 12.443333333;
	$a_string = "12.33";

	$x = 8 - 6.4;
	$y = 1.6;

	var_dump($x == $y);
	var_dump(round($x, 2) == round($y, 2));	

	echo gettype($a_bool);
	echo "\n";
	echo gettype($a_string);
	echo "<br>";
	echo gettype($a_str2);
	echo "<br>";
	echo var_dump($a_float);

	if(is_int($a_int)){
		$a_int += 5-2;

		echo "$a_int";

	}

	if(is_bool($a_float)){
		echo "string : $a_bool";
	}
?>