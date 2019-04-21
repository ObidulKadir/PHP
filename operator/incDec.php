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
  		
  		++a,a++,--a,a--
	
		<hr>
			<?php 
				echo '== Alphabets =='.PHP_EOL;

				$s = 'W';
				for ($n=0; $n<6; $n++){
					
					echo ++$s .PHP_EOL;
			}

			echo "<hr>";

			echo '== Digit =='.PHP_EOL;

			$d = "A8";

			for($n=0; $n<6; $n++){
				echo --$d .PHP_EOL;
		}
		
		echo "<br>";

		$n = 4;


		echo $n-- + 5;

		echo $n;


				


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "Increment/Decrement operator" ?></h2>

		</div>

	</section>
	
</body>
</html>