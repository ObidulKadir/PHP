<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shedule Message Programing.</title>
</head>

	<style>

	p{
		text-align: center;
		font-size: 60px;
		margin-top: 220px;
		color: #7D8A9A;
		

	}
		

	</style>
	
<body>

	<?php

		$DayOfWeek = date("w");
	//	echo "$DayOfWeek";

		switch ($DayOfWeek) {
			case '0':
				# code...
				echo "<p>It's Sunday</p>";
				break;

			case '1':
				# code...
				echo "<p>It's Monday</p>";
				break;

			case '2':
				# code...
				echo "<p>It's Tuesday</p>";
				break;

			case '3':
				# code...
				echo "<p>It's Wednesday</p>";
				break;

			case '4':
				# code...
				echo "<p>It's Thursday</p>";
				break;

			case '5':
				# code...
				echo "<p>It's Friday</p>";
				break;
			case '6':
				# code...
				echo "<p>It's Saturday</p>";
				break;
			
			default:
				# code...
				break;
		}
	?>
	
</body>
</html>