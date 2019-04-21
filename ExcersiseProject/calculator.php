<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form class="form-group">
		<div class="form-inline">
		<input class="form-control mx-2" type="text" name="num1" placeholder="Enter the First number">
	
		<input class="form-control mr-2" type="text" name="num2" placeholder="Enter the Second number">
		
			<select class="form-control mr-2" name="operator" id="">
				<option>None</option>
				<option>Add</option>
				<option>Subtract</option>
				<option>Division</option>
				<option>Multiply</option>
				<option>Modulus</option>
			</select>

		</div>
		<br>
		
		<button class="btn btn-success col-sm-4 ml-5" name="submit">Calculate</button>

	</form>
    <p>The answer is :</p>
	
	<?php
		if(isset($_GET['submit'])){
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['operator'];

			switch ($operator) {
				case 'None':
					echo "You have to select operator!!!";
				     break;
				case 'Add':
					echo $result1 + $result2;
				     break;
			    case 'Subtract':
					echo $result1 - $result2;
				     break;
				case 'Multiply':
					echo $result1 * $result2;
				     break;

				case 'Division':
					echo $result1 / $result2;
				     break;
				case 'Modulus':
					# code...
					echo $result1 % $result2;
					break;
				     
				
				default:
					echo "Error occur!!!!!!!!!";
					break;
			}
			
		}


	?>
	
</body>
</html>