<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Conditonal Statement</title>

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
		
		

		<hr>
  		
  		 
	
		<hr>
			<?php

				$a = 'Shayan';
				$b = 'Shayan';

				// you can set identical(===) operator for checking 
				if($a == $b){
				 echo "Condtional Statment is true";
			}
			elseif($a === $b){
				echo "the statement is bigger than b";
		}
			else{
					echo "None of them true";
			}




				


				
			 ?>
		</div>

			 <div class="footeroption">
			<h2><?php  echo "ELSE IF Statement" ?></h2>

		</div>

	</section>
	
</body>
</html>