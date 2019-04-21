 <?php 
				 $name = $email =$phnno =$website =$comment=$gender="";
				 $errname = $erremail =$errphnno = $errwebsite = $errgender="";

				 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				 		if (empty($_POST['name'])) {
				 			# code...
				 			$errname = "<span style='color:red'>Name is required.</span>";
				 		}
				 		else{
				 			$name   	=  validate($_POST['name']);

				 		}

				 		if (empty($_POST['email'])) {
				 			# code...
				 			$erremail = "<span style='color:red'>Email is required.</span>";
				 		}
				 		elseif (!filter_var($_POST['email'] ,  FILTER_VALIDATE_EMAIL)) {
				 			# code...
				 			$erremail = "<span style='color:red'>Invalid email format.</span>";
				 		}

				 		else{
				 			$email 		=  validate($_POST['email']);

				 		}
				 			if (empty($_POST['phoneno'])) {
				 			# code...
				 			$errphnno = "<span style='color:red'>Phoneno is required</span>";
				 		}
				 		else{
				 			$phnno 		=  validate($_POST['phoneno']);

				 		}
				 		if (empty($_POST['website'])) {
				 			# code...
				 			$errwebsite = "<span style='color:red'>Website is required</span>";
				 		}
				 		elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
				 			# code...
				 			$errwebsite = "<span style='color:red'>Invalid website(url) format.</span>";
				 		}
				 		else{
				 			$website 		=  validate($_POST['website']);

				 		}
				 		if (empty($_POST['gender'])) {
				 			# code...
				 			$errgender = "<span style='color:red'>Website is required</span>";
				 		}
				 		else{
				 			$gender 		=  validate($_POST['gender']);

				 		}

						$comment 	=  validate($_POST['comment']);

				 		
				 	}

					function validate($data){
                         
                         $data = trim($data);
                         $data = stripcslashes($data);
                         $data = htmlspecialchars($data);

                         return $data;

					}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

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

		Php form validation
		<span style="float: right;">
		<?php 
            date_default_timezone_set('Asia/Dhaka');
            echo "Time:" ,date("h:i:sa");
		?>
		</span>
			<hr>
             
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

             	<p><span style="color: red"> * Required file.</span></p>
             	
             	<table>
             		<tr>
             			<td>Name</td>
             			<td>
             				<input type="text" name="name">*<?php echo $errname;?>
             			</td>
             		</tr>
             		<tr>
             			<td>E-mail</td>
             			<td>
             				<input type="text" name="email">*<?php echo $erremail; ?>
             			</td>
             		</tr>
             		<tr>
             			<td>Phone No</td>
             			<td>
             				<input type="text" name="phoneno">*<?php echo $errphnno; ?>
             			</td>
             		</tr>
             		<tr>
             			<td>Website</td>
             			<td>
             				<input type="text" name="website">*<?php echo $errwebsite; ?>
             			</td>
             		</tr>


             		<tr>
             			<td>Comment</td>
             			<td>
             				<textarea name="comment"  cols="50" rows="5"></textarea>
             			</td>
             		</tr>
             		<tr>
             			<td>Gender</td>
             			<td><input type="radio" value="Male" name="gender">Male
             				<input type="radio" value="Female" name="gender">Female
             				*<?php echo $errgender; ?>
             			</td>
             		</tr>
             		<tr>
             			<td></td>
             			<td><input type="submit" value="submit"></td>
             		</tr>
             	</table>

             </form>

              
				
                  


			</div>


		  <div class="footersection">
		  	<h2><?php echo "Form Validation"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>