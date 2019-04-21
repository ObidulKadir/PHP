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
  		
  		and , or, xor, &&, !, || 
	
		<hr>
			<?php

			$a = 50;
			$b = 20;

			if($a == 50 and $b==20){
			echo "AND operator is working";
		}
			else{

				echo "Not working";
		}

		echo "<br/>";

		//EITHER a OR b will be true
		if($a == 50 or $b == 20){
			echo "or operator is working";
		}
			else{

				echo "Not working";
		}

		echo "<br/>";

		//EITHER a XOR b will be false when a equal b
		if($a == 50 xor $b == 40){
			echo "xor operator is working";
		}
			else{

				echo "Not working";
		}

		echo "<br/>";

		// True if $a is not true
		if (!($a == 50 or $b == 20)){
			echo "not operator is working";
		}
			else{

				echo "Not working";
		}
		
		echo "<br>";
		$a = (false && foo());
		var_dump ($a);

		echo "<br>";
		$a = (true || foo());
		var_dump ($a);

		echo "<br>";
		$a = (false || true);
		var_dump ($a);

		echo "<br>";
		$a = (false && foo());
		var_dump ($a);

		echo "<br>";
		$a = (false || true);
		var_dump ($a);

		echo "<br>";
		$b = (true || false);
		var_dump ($a, $b);




				


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "Logical operator" ?></h2>

		</div>

	</section>
	
</body>
</html>