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
			php Superglobals $GLOBAL,$_SERVER,$_REQUEST,$_POST,$_GET,$_ENV,$$_FILES

								$_COOKIE
								$_SESSION
			<hr>
             
             <h3>Example - 1(SuperGlobal $GLOBAL)</h3>
				 <?php 

				 $a = 10;
				 
				 function globals(){
				 	$b = 1;
				 		$GLOBALS['z'] = $GLOBALS['a'] + $b;
				 		//echo $GLOBALS['z']; //same

				 }
				 globals();
				 echo "$z";

				  

			

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "Variable Scope Local or Global"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>