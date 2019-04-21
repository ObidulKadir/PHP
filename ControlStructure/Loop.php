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

				 <?php 

			
					
					
					for($i = 0;$i < 5; $i++){
						for($j = 0;$j < $i; $j++){
							echo " * ";
			   		}
			   		echo "<br>";

				}


		


					for($i = 0;$i <= 10;$i++){
							while(($i%2)==0){
							echo "its a even number:$i";
							echo "<br>";
							$i++;
							echo "number:$i ";
							echo "<br>";
						}
						
							echo "its a odd number:$i";
							echo "<br>";

						 
						}

				  ?>
			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  For Loop"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>