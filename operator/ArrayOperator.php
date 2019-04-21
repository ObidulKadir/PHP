<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Operator</title>

	<style>
		.phpcoding{
			width: 600px;padding: 10px;margin: 0 auto; background: #ddd;min-height: 40px;
		}

		.headeroption, .footeroption{
			background: #444;color: #fff;text-align: center;
			padding: 10px;

		}

		.headeroption h2, .footeroption h2{
			margin: auto;
		}
		.maincontent{
			height: 300px;
			padding: 20px;
		}
	</style>
</head>
<body>

	<section class="phpcoding">
		<div class="headeroption">
			<h2>Php Basic</h2>

		</div>
		
		<div class="maincontent">
		
		1.Arithmatic Operator.
		1.Assignment Operator;
		3.Comaprison Operator;
		4.Increment/Decrement;
		5.Logical Operactor;
		6.String Operator.
		7.Tarnary Operator;

		<hr>
  		$a + $b(union),==(equality),===,!=,<>,!==
  		 
	
		<hr>
			<?php
			 	
			 $a = array(
					"a" => "Dhaka",
					"b" => "kushtia"

			 );

			 $b = array("a" => "Dhaka",
					"b" => "kushtia");

			echo "<pre>";
			var_dump($a !== $b);
	     	echo "</pre>";

	     	$a = array(1,2,3);
	     	$b = array(4);

	     	echo '$a + $b:';

	     	print_r($a + $b);


				




				


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "Array operator" ?></h2>

		</div>

	</section>
	
</body>
</html>