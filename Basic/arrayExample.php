<?php 

	echo "Array 1 Example";

	$first = array("Text 1",
					"Text 2",
					"Text 3",
					"Text 4",
					"Text 5",
					"Text 6");

	echo "<pre>";
	print_r($first);
	echo "</pre>";

	echo "<hr>";

	echo "Array 2 Example";

	$second = array(
					"Text 1",
					"Text 2",
					 array("Sub 1","Sub 2",
						"Sub 3","Sub 4","Sub 5"),
					"Text 4",
					"Text 5",
					"Shayan" => "kadir",
					"Text 7",
					array("Sub  sub 1","Sub  sub 2",
						array("Sub sub sub  1",
							"Sub  sub sub 2",
							"Sub sub  sub 3"),
							"sub sub sub 4"),
					"text 9"



	);

	echo "<pre>";
	print_r($second);
	echo "</pre>";

 ?>