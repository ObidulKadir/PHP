<?php
  require "header.php";
?>
<main>
	<style>
		p{
			text-align: center;
		}
	</style>

	<?php
	if (isset($_SESSION['userId'])) {
		
		echo "<p>You are logged in.</p>";
	}
	else
	{
		echo "<p>You are logged out.</p>";
	}

	?>
	
	
</main>

<?php
   	require "footer.php"
?>