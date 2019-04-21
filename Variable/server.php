<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VARIABLE</title>

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
             
             <h3>Example - 1(SuperGlobal $_SERVER)</h3>
				 <?php 
                  
                  echo $_SERVER['PHP_SELF'];
                  echo "<br>";
                  echo $_SERVER['SERVER_NAME'];
                  echo "<br>";
                  echo $_SERVER['SCRIPT_NAME'];
                  echo "<br>";
                  echo $_SERVER['HTTP_HOST'];
                  echo "<br>";
                  echo $_SERVER['HTTP_REFERER'];
                  echo "<br>";
                  echo $_SERVER['HTTP_USER_AGENT'];
                  //echo "<br>";
                 // echo $_SERVER['HTTPS'];

				
				  

			

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "Variable Scope SuperGlobal"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>