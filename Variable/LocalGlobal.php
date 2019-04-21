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
             
             <h3>Example - 1(local+global)</h3>
				 <?php 

				  $a = 111; // its global variable .its excess all over in this file but access purpose have to use lik global $a

				  function sum(){
				  	global $a;

				  	$b = 11; //local variable its excess only into the function

				  	echo $a + $b;
				  }
				  sum();

			

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "Variable Scope Local or Global"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>