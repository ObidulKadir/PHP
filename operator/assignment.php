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
  ==,===,!=,<>,!==,<,><=,>=,<=>,
	
		<hr>
			<?php 
				$x = 100; //int type
				$y = '100'; //string type

				var_dump($x == $y);
				echo "<br>";
				var_dump($x === $y); //identical operator
				echo "<br>";

				var_dump($x <> $y);//not equal
				echo "<br>";
				var_dump($x !== $y);//not identical
				echo "<br>";

				var_dump($x <=> $y);
				echo "<br>";

				echo [1,2,3] <=> [1,2,4];
				//spcaeship

				$a = (object) ['a' => 'b'];
				$b = (object) ['b' => 'b'];

				echo $a <=> $b;

				var_dump(1 == TRUE);
				var_dump(1 == FALSE);
				var_dump(100 < TRUE);
				var_dump(10 > FALSE);
				var_dump(min(-100, -10,Null,10,100));

				$a = '100';
				$b = '10';
				
				echo "<br>";
				var_dump($a,$b);

			


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "Comparison operator" ?></h2>

		</div>

	</section>
	
</body>
</html>