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
			Php file read write open.
			<span style="float: right">
				<?php 
				date_default_timezone_set("Asia/Dhaka");
                echo "Time :" ,date("h:i:sa");
				?>
			</span>
			<hr>
             
             
				 <?php 
					$outfile = fopen("text.txt", "r") or die("File not found!!!");
					//echo "$outfile";
					//echo fread($outfile, filesize("text.txt"));
					//echo fgets($outfile, filesize("text.txt"));
					//echo fgetc($outfile);
					while (!feof($outfile)){
						//echo fgets($outfile) ."<br>";
						echo fgetc($outfile) ."<br>";
					}
					fclose($outfile);

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "File read open close"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>