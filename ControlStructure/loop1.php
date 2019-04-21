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
					
					<h2>Example-1</h2>
				 <?php 

				 echo "stt";

					for($i = 0; $i < 6;$i++){
						for($j = 0; $j < $i; $j++){
							//echo "j vale= $j ";
							//cho "<br>";
							echo " * ";
			   	     	}
			   		echo "<br>";
			   		echo "i = $i";
			   		//echo "<br>";

					}
//var_dump(2<2);

			  ?>
			  <hr>
				<h3>Example-2 </h3>
			 <?php 
			 
				for($i=4 ;$i>=0; $i--){
				    for($j=0; $j<=$i ;$j++){
				       echo " $j ";

				}
				echo "<br>";
			}

			?>

			 <?php 
			 echo "<h3>Example-3</h3>";
				for($i=4 ;$i>=0; $i--){
				    for($j=0; $j<=$i ;$j++){
				       echo $j + $j ;
				       echo "  ";
				       
				}
				echo "<br>";
			}

			?>

			 <?php 
			 echo "<h3>Example-4</h3>";
				for($i=4 ;$i>=0; $i--){
				    for($j=0; $j<=$i ;$j++){
				       echo $j ;
				       echo "  ";
				       echo $j - 1;
				       echo "  ";
				       
				}
				echo "<br>";
			}

			?>

			<?php 
			 echo "<h3>Example-5</h3>";
				for($i=4 ;$i>=0; $i--){
				    for($j=0; $j<=$i ;$j++){
				       echo $i ;
				       //echo "  ";
				      // echo $j - 1;
				       echo "  ";
				       
				}
				echo "<br>";
			}

			?>

			<?php
			 echo "<h3>Example-6</h3>";
                 $no = 0;
				for ($i=0; $i < 5 ; $i++) { 
					# code...
					for ($j=0; $j < $i; $j++) { 
						# code...
					   $no++;
					   echo " $no ";
					}
					echo "<br>";
				}
			?>
			
			<?php 
			$no = 15;
			 echo "<h3>Example-7</h3>";
				for($i=4 ;$i>=0; $i--){
				    for($j=0; $j<=$i ;$j++){
				       $no--;
					   echo " $no ";
				       
				}
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