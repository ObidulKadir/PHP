<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ControlStructure</title>

	<style>
		.phpcoding{
			
			background: lightgray;
			min-height: 400px;
			width: 900px;
			margin: 0 auto;
		
		}
		.headersection, .footersection{
			background: gray;
			text-align: center;
			

		}
		.headersection h2,.footersection h2{
			padding: 10px;
			color: white;
		}
		.maincontent{
			min-height: 400px;
			padding: 20px;
		}
	</style>

</head>
<body>
	<div class="phpcoding">

		<div class="headersection">
			<h2>Php Basic</h2>

		</div>

		
			<div class="maincontent">


			<hr>
			php loops
			<hr>
             

             <h3>Example - 1(Userdefined)</h3>
				 <?php 

				 		function some_extra(&$string){
				 			$string .= 'and something extra.';
				 		}
				 		$str = 'this is string, ';
				 		some_extra($str); // prepend the value before $string value
				 		echo "$str";
			

			  ?>

			  <h3>Example-2 (default parameter)</h3>

			  <?php

			  function makecoffe($type = "capucinno"){
			  	return "Making a coffe of $type.  ";
			  }

			  echo makecoffe();
			  echo makecoffe(NULL);
			  echo makecoffe("balck");



			  ?>

			  <h3>exmple -3 </h3>

			  <?php  

						  function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
							{
							   $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;

							    return "Making a cup of ".join(", ", $types)." with $device.\n";
							}
							echo makecoffee();
							echo makecoffee(array("cappuccino", "lavazza"), "teapot"); 



				?>

				<h3>Example-4</h3>

				<?php
						function student($types = array("teacher"), $teacher = null){
							$teach = is_null($teacher) ? "learning" : $teacher;

							return "Student can be " .join(" , ",$types)." by $teach.";
						}
						echo student();
						echo student(array("Engineer","Doctor"),"learning");
				?>

				<h3>Example - 5(Incorrect usage of default function argument)</h3>

				
				
				<?php
					function makeyogurt($type = "acidophilus", $flavour)
					{
					    return "Making a bowl of $type $flavour.\n";
					}
					 
					echo makeyogurt("raspberry","kit");   // won't work as expected
			
							/*its can be worked by passing two value into call function.or $flavour = null to set then eaily it can be worked or change the argument position like $flavour, $type = "acidophilus" */
				?>

				<h3>Example-6(Strict typing)</h3>
				<?php
					//declare(strict_types=1);

					function sum(int $a, int $b) {
					    return $a + $b;
					}

					var_dump(sum(1, 2));
					var_dump(sum(1.5, 2.5));
					?>
					<h3>Example-7</h3>

					<?php
						function sumation($array,$max){   //For Reference, use:  "&$array"
						    $sum=0;
						    for ($i=0; $i<2; $i++){
						        #$array[$i]++;        //Uncomment this line to modify the array within the function.
						        $sum += $array[$i];  
						    }
						    return ($sum);
						}

						$max = 1E7;                  //10 M data points.
						$data = range(0,$max,1);

						$start = microtime(true);
						for ($x = 0 ; $x < 100; $x++){
						    $sum = sumation($data, $max);
						}
						$end =  microtime(true);
						echo "Time: ".($end - $start)." s\n";

						?>




			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  Function"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>