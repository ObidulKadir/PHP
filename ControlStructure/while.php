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
			php while loops
			<hr>

				 <?php 
				 	$i = 1;
				 	while ($i<=10) {
				 		# code...
				 		echo $i++ ."\n";
				 	}

				 	echo "<hr>";
				 	$x = 10;

				 	while ($x > 0) {
				 		# code...
				 		echo "hello: $x <br/>";
				 		$x--;

				 		if($x == 6){
				 			break;
				 		}
				 	}

				  ?>
				  <hr>

				  <?php

				  	$x = -1;

				  	while ($x) {
				  		# code..
				  		echo $x;
				  		echo "<br>";
				  		echo ++$x;
				  	}

				  ?>
			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  While Loop"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>