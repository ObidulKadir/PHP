<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.image{
			height: 100px;
			width: 200px;
		}
		ul li a:hover{
			font-size: 30px;
		
		}
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<a  class="navbar-brand" href="#">
				<img class="image" src="img/logo3.png" alt="logo" ">
			</a>
			
				<ul class="navbar-nav mr-auto">
					<li><a class="nav-link" href="">Home</a></li>
					<li><a class="nav-link" href="">Portfolio</a></li>
					<li><a class="nav-link" href="">About me</a></li>
					<li><a class="nav-link" href="">Gallery</a></li>
					<li><a class="nav-link" href="">Contact</a></li>
				</ul>

				<div>

					<?php

					 if (isset($_SESSION['userId'])) {
					 		
					 		echo '<form class="form-inline" action="includes/logout.inc.php">
						<button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
					</form>';
					 }
					 else{
					 	echo '<form class="form-inline" action="includes/login.inc.php" method="post">
						<input class="form-control mr-2" type="text" name="mailuid" placeholder="Username/E-mail....">
						<input class="form-control mr-2" type="password" name="pwd" placeholder="Password.....">

						<button class="btn btn-primary" type="submit" name="login-submit">Login</button>


						<a class="btn btn-outline-info" href="signup.php">Signup</a>
						
					</form>';
					 }

					?>

					
					
					

					

				</div>
			
		</nav>
	</header>
	
</body>
</html>