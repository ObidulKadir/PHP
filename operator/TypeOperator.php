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
  			instanceof
  		 
	
		<hr>
			<?php
			 	
			class MyClass
				{
				}

				class SClass extends MyClass
				{
				}
				$a = new MyClass;
				$b = new SClass;

				var_dump($a instanceof MyClass);
				var_dump($b instanceof SClass);

				




				


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "Type operator" ?></h2>

		</div>

	</section>
	
</body>
</html>