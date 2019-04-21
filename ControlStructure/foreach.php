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
			php for each loops
			<hr>
					
					<h2>Example-1</h2>
				<?php

					$arr = array('A','B','C','D');
					foreach ($arr as $key => $value) {
						# code...
						echo "$key => $value";
						echo " ";
					}

				?>
				<h2>Example-2</h2>
				<?php
				$bal = array('shayan' => 'ahamed' ,'obidul' => 'kadir',"sayfan" => "ali" );

				foreach ($bal as $key => $value) { //you can use defferent variable name instead of key and value.
					# code...
					echo $key . " ". $value;
					echo " ";


				}
				echo "$key => $value";


				?>
				<h4>example - 3(list in foreach)</h4>
				<?php
						$array = array([1,2],[2,3]);

						foreach ($array as list($a,$b)) {
							# code...
							echo "A : =$a  " . " " ."B:=$b";
							echo "<br>";
						}

				?>

				<h4>Example-4</h4>

				<?php
					$array = array([1,2],[2,4],[5,6],[7,8]);
					foreach ($array as list($a,$b)) {
						# code...
						echo "A : =$a  " . " " ."B:=$b";
						 $C=$a*$b;
						 echo " "."C=$C";

							echo "<br>";
					}
				?>

				<h5>Example-5</h5>

				<?php
					$arry = array([1,2,3],[3,5,6]);
					foreach ($arry as list($a,$b,$c)) {
						# code...
						echo "A : =$a  " . " " ."B:=$b" . " "."C:=$c";
							echo "<br>";
					}
					
				?>
				<h2>Example -6</h2>

				<?php
					$bal = $arrayName = array('2' =>100 ,'2' => 200,'2' => 100 );

					foreach ($bal as $key => $value) {
						# code...
						if($key == 2){
							echo "Array key values is:$value";
						}
						elseif ($value == 300) {
							# code...
							echo "Array keys is :$key ";
						}

					}

				?>
			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  Foreach Loop"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>