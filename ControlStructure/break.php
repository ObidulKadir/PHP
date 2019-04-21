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
			php for each loops
			<hr>
					
					<h2>Example-1</h2>
				<?php

					$shayan = array('kadir','samawon','sadikin','sayfan');
					foreach ($shayan as $key => $value) {
						# code...
						echo "$shayan[2]";
						echo "<br/>";
					}

				?>

				<?php
					$a = 1;
					$b = 1;

					$c = $a + $b;

					echo "<h3>Example-$c</h3>";

					$i = 0;
							while (++$i) {
								//echo "$i"." ";
							    switch ($i) {
							        case 5:
							            echo "At 5<br />\n";
							            break 1;  /* Exit only the switch. */
							        case 10:
							            echo "At 10; quitting<br />\n";
							            break 2;  /* Exit the switch and the while. */
							        default:
							            break;
							    }
							}

				?>
			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  Break"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>