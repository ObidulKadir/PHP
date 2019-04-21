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
			Php file upload /image.
			<span style="float: right">
				<?php 
				date_default_timezone_set("Asia/Dhaka");
                echo "Time :" ,date("h:i:sa");
				?>
			</span>
			<hr>
             
             
			 <?php 
					 if (isset($_FILES['image'])) {
					 	# code...
					 	$filename = $_FILES['image']['name'];
					 	$filetemp = $_FILES['image']['temp_name'];
					 	move_uploaded_file($filetemp,"image".$filename);
					 	echo "Image Upload Successfully";
					 }

			  ?>
			  <form action="" method="post" enctype="multipart/form-data">
			  	<input type="file" name="iamge">
			  	<input type="submit" value="Submit">
			  </form>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "File upload /image;" ?></h2>
		  </div>
	
	</div>
	
</body>
</html>