<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File</title>

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
			Php file write .
			<span style="float: right">
				<?php 
				date_default_timezone_set("Asia/Dhaka");
                echo "Time :" ,date("h:i:sa");
				?>
			</span>
			<hr>
             
             
				 <?php 

				 $createfile = fopen("new.txt", "w") or die("file not found");
				 $one = "Obidul kadir . ";
				 
				 fwrite($createfile, $one);
				 $two = "Sayfan shayan";
				 fwrite($createfile, $two);
				 fclose($createfile);

					

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "File write"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>