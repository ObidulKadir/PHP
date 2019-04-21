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
			php loops
			<hr>
             
             <h3>Example - 1(Userdefined)</h3>
				 <?php 

			
				function bar(){
					echo "string";


				}
				bar();

				$makepass = True;

				if ($makepass) {
					# code...
					echo "<br>";
					bar();
					echo " ki";
				}

				  ?>
				  <hr>
			<h3>Example-2(Function withn function)</h3>
			<?php

			function OuterFunction(){
				function InnerFunction(){
					$a = 4;
					$b = $a * 6;

					echo "$b";
				}
			}

				//InnerFunction();  //Fatal error: Uncaught Error: Call to undefined function InnerFunction()
				/* First time innner function didnot found yet beause its into outerfunction
				So ,before call to InnerFunction we have to call first OuterFunction*/
				OuterFunction();
				InnerFunction();
			?>
			<h3> Exmple-3(Recursive Function)</h3>

			<?php

			//	$a = 2;

				function recursion($a)
					{
						
					    if ($a < 20) {
					        echo "$a\n";  //2. prints  a value one by one.
					       recursion($a + 1); //its increment the value and call the function.
					    }
					}

				recursion(2); // 1. calling to the function and pass a value = 2


			    ?>

			  <h3>Example-4 use of static variables</h3>

			  <?php

			  function test(){
			  					static $a = 0;
			  					echo $a;
			  					$a++;
			  					echo "$a";
			  }

			  test();

			  ?>
			  <h3>Static Variable with recursive functions</h3>
			  <?php

			  		function testing(){
			  			static $count = 0;
			  			$count++;
					    echo $count;
					    if ($count < 10) {
					    	echo "$count";
					        testing();
					    }
					    $count--;
			  		}

			  		testing();

			  ?>


			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  For Loop"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>