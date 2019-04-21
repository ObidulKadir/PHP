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
			php for declare
			<hr>
					
					<h2>Example-1</h2>
				<?php
						declare(ticks=2);

						function handler(){
							echo "handler 1 called ";
						}
						register_tick_function('handler');



						echo "<p>A paragraph (from the Ancient Greek παράγραφος paragraphos, ) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentence</p>";

						echo "<p>A paragraph (from the Ancient Greek παράγραφος paragraphos, ) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentence</p>";


					
				?>
				<?php

				declare(encoding='ISO-8859-1');
					echo "<p>A paragraph (from the Ancient Greek παράγραφος paragraphos, ) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentence</p>";
				?>
			</div>


		  <div class="footersection">
		  	
		  </div>
	

	</div>
	
</body>
</html>