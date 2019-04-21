<?php
  require "header.php";
?>
<style>
	.form-control{
		width: 400px;
		
	}
	p{
		font-weight: bold;
	}
</style>
<main>
	<div>
		<section class="card mt-3 text-center col-md-4 offset-md-4">
			<h1 class="display-4 text-center ">Signup</h1>
			<?php
			if (isset($_GET['error'])) {
			
				if ($_GET['error'] == 'emptyfields') {

					echo "<p class='text-danger'><span class='badge align-top'>*</span>Fill the all field.!!!</p>";
				}
				elseif ($_GET['error'] == 'invaliduidmail') {
					# code...
					echo "<p class='text-danger'>Invalid Username and E-mail.!!!</p>";
				}
				elseif ($_GET['error'] == 'invaliduid') {
					# code...
					echo "<p class='text-danger'>Invalid Username.!!!</p>";
				}
				elseif ($_GET['error'] == 'invalidmail') {
					# code...
					echo "<p class='text-danger'>Invalid E-mail.!!!</p>";
				}
				elseif ($_GET['error'] == 'passwordcheck') {
					# code...
					echo "<p class='text-danger'>Your Password does not match.!!!</p>";
				}
				elseif ($_GET['error'] == 'usertaken') {
					# code...
					echo "<p class='text-warning'><span class='badge  align-top'>*</span>Username is already taken.!!!</p>";
				}
				

			}
			
			elseif ($_GET["signup"] == "success") {
				
				echo '<p class="text-success">Signup succesfull... !!!</p>';

			}
			?>
			<form  action="includes/signup.inc.php" method="post">
				<input class="form-control" type="text" name="uid" placeholder="Username">
				<input class="form-control" type="text" name="mail" placeholder="E-mail">
				<input class="form-control" type="password" name="pwd" placeholder="Password">
				<input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat Password">

				<button class="btn btn-outline-success mb-3 mt-2" type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
	
</main>

<?php
   	require "footer.php"
?>