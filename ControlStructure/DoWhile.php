<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Structure</title>

	<style>
		.phpbg{
			background: #4444;
			width: 900px;
			
			margin: 0 auto;
		}
		.phphead, .phpfooter{
			background: #444;
			color: #ffffff;
			text-align: center;
			padding: 20px;
			
		 
		}
		.phphead h2 , .phpfooter h2{
			
			margin: 0;
			

		}
		.maincontent{
			min-height: 400px;
			padding: 20px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<section class="phpbg">
		<section class="phphead"><h2>PHP Basic</h2></section>

		<section class="maincontent">

				do while 
			<hr>

			<?php 

				$i = 1;

				do{
					echo "The multiple number is :" .$i * 3;
					echo "<br/>";
					$i++;
				}while ($i<=5) ;

				echo "<hr>";

				//$number = 1;
				$n = 5;
				$factorial = 1;

				do{
					$factorial *= $n;
					echo "Factorial Value is : $factorial";
					echo "<br/>";


					--$n;


				}while($n>1);


				// generating an array with random even numbers between 1 and 1000

				$numbers = array();
				$array_size = 10 ;

				for ($i=0 ; $i < $array_size  ; $i++ ) { 
					# code...
					do{
						$random = rand(1,100);

					}
					while (($random % 2) == 1);

					$numbers[] = $random; 
				}

				asort($numbers);

				echo "<pre>";
				print_r($numbers);
				echo "<pre/>";

				echo "<hr>";

				$n = 10;

					do{
						echo "The Number is even: $n";
						echo "<br>";
					}while(($n % 2)==0);
				


			 ?>
			
		</section>
		

		<section class="phpfooter"><h2><?php echo "Do While Loop"; ?></h2></section>
	</section>
	
</body>
</html>