<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Structure</title>

	<style>
		.phpbg{
			background: #4444;
			width: 900px;
			
			margin: 0 auto;
		}
		.phphead, .phpfooter{
			background: #444;
			color: #ffffff;
			text-align: center;
			padding: 20px;
			
		 
		}
		.phphead h2 , .phpfooter h2{
			
			margin: 0;
			

		}
		.maincontent{
			min-height: 400px;
			padding: 20px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<section class="phpbg">
		<section class="phphead"><h2>PHP Basic</h2></section>

		<section class="maincontent">

				Alternative syntax 
			<hr>
				
			
			<?php
				$a = 5;
			 if ($a == 5):
			 	{
			 		echo "a is working for 1st php function";
			       }
 
			 ?>

			 <?php 
			elseif ($a>5): 
			 ?>
			 a is greater than.

			 <?php
			 elseif ($a<5):
			 ?>
			 a is small.

			 <?php
			 	endif;
			 ?>
			
			<h4>Example -2(normal if-else statement):</h4>
			 <?php
			 $b = 3;

			 if ($b==3) {
			 	# code...
			 	echo "b is equal";
			 }
			 elseif ($b>2) {
			 	# code...
			 	echo "b is greater than 2";
			 }
			 elseif ($b<2) {
			 	# code...
			 	echo "b is smaller than 2";
			 }
			 else{
			 	echo "not working";
			 }
			 ?>
			 <h3>Example-3 (alternative statement):</h3>

			 <?php
			 		$c = 4;
			 		if ($c==4):
			 			echo "c is equal";
			 			echo "!!!";

			 		elseif ($c>4):
			 			echo "c is greater than 4.";
			 			echo "!!!";

			 		elseif ($c<4):
			 			echo "c is smaller than 4.";
			 			echo "!!!";

			 		endif;

			 ?>

			 <h2>Exmaple-4(alternative syntax part-3)</h2>

			 <?php
			  $f = 101;

			  if ($f == 10) { ?>
			  
				a is working in not 2nd php.

			  <?php
			  		
			  		}
			  		elseif ($f>10) {
			  			?>
			  			f is bigger.

			  <?php
			  		}
			   
			   //echo "f is bigger";
			    ?>

			    <h2>
			    	exmple -5 (is same as exmple-4)
			    </h2>

			    <?php

			    	$fuck = 10;
			    	if($fuck==10) {?>
						fuck in 10 days ;

						<?php
					//endif;
			    	}
			    	?>

			    <h1>exmple-6(isset)</h1>

			    <?php
			    $bar = 'bar';
			    $foo = 'foo';

			    if (isset($bar)) {
			    	if (isset($fooo)) {
			    		# code...
			    		echo "foo and bar is working";
			    	}
			    }
			    elseif (isset($foo)) {
			    	# code..
			    	echo "Only foo is set.";
			    }
			    elseif (isset($bar)) {
			    	# code...
			    	echo "bar is set";
			    }

			    else{
			    	echo "Only 'bar' also is set.";
			    }


			    ?>

					 <h1>Exmple-6 (in alternative ways)</h1>


				  <?php
			    $bar = 'bar';
			    $foo = 'foo';

			    if (isset($barr)):
			    	if (isset($foo)){
			    		# code...
			    		echo "foo and bar is working";
			    	};
			    	
			    
			    elseif (isset($foo)):
			    	echo "Only foo is set.";
			    
			    else:
			    	echo "Only 'bar' is set.";
			    
			    endif;


			    ?>
			<h3>Normal is if else</h3>

			<?php
				$a = 5;
				$b = 6;
				$c = 6;

				if ($a == 5) {
					# code...
					if ($b == 7) {
						# code...
						echo " bis normal";
					}
					
				}

				elseif ($c == 6) {
					# code...
					echo "c is working";
				}

			?>

			<h4>new exmple</h4>
			<?php
			    $bar = 'bar';
			    //$foo = 'foo';

			   

			    if (isset($bar) && isset($foo)) 
			    {
			    		# code...
			    	echo "foo and bar is working";
			    	
			    }

			    elseif (isset($foo)) 
			    {
			    	# code..
			    	echo "Only foo is set.";
			    }

			    elseif(isset($bar))
			    {
			    	echo "Only bar is set.";
			    }

			    else
			    {
			    	echo "Kono bal set nai!!!!";
			    }


?>

<h4>bal</h4>
				<?php
			    $bar = 'bar';
			    //$foo = 'foo';

			   

			    if (isset($bar)) 
			    {
			    	if (isset($fooo)) 
			    	{
			    		# code...
			    		echo "foo and bar is working";
			    	}
			    	else
			    	{
			    		echo "bar is working";
			    	}
			    }

			    elseif (!isset($bar)) 
			    {
			    	if (isset($foo)) 
			    	{
			    		# code...
			    		echo "foo is working";
			    	}
			    }
			    elseif (! isset($foo)) {
			    	# code...
			    	if (isset($bar)) {
			    		# code...
			    		echo "bar is now working";
			    	}
			    }

?>

			  

			  

			
		</section>
		

		<section class="phpfooter"><h2><?php echo "Alternative syntax "; ?></h2></section>
	</section>
	
</body>
</html>