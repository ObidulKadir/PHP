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
		.headersection h2,.footersect2ion h2{
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
             
             <h3>Example - 1(SuperGlobal $_REQUEST AND $_POST)</h3>

              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					 Username:<input type="text"  name="username">
					 Password:<input type="Password"  name="password">
					 <input type="submit" value="submit">
					 </form>
				 <?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						# code...
						$name=$_REQUEST['username'];
						$passwd=$_REQUEST['password'];

						if (empty($name) && empty($passwd)) {
							# code...
							echo "<span style='color:red'>Username and password must not be empty.</span>";
						}
						elseif (empty($name)) {
							# code...
							echo "<span style='color:red'>Username must not be empty.</span>";
						}
						elseif (empty($passwd)) {
							# code...
							echo "<span style='color:red'>Password must not be empty.</span>";
						}
						else
						{
							echo "<span style='color:green'>You have submitted:$name.</span>";
						}
					}


				 ?>
                  


			</div>


		  <div class="footersection">
		  	<h2><?php echo "SuperGlobals"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>