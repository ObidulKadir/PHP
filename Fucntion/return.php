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
             

             <h3>Example - 1(Returning Values)</h3>

				<?php
							function small_numbers()
							{
							    return array (0, 1, 2);
							}
							 list ($zero, $one, $two) = small_numbers();
						
				?>

				<h3>Example --2 Basic return</h3>

				<?php

					function sum($a, $b): float{
						return $a + $b;
					}

					var_dump(sum(1,2));
				?>

				<h3>Example-3 Reurning object</h3>

				<?php

					class C{}
					class D{}

					function getC(){
						return new C;
						//goto getD;
					}
					var_dump(getC());
				    function getD(){
				    	return new D;
				    }
				    var_dump(getD());


				?>
				<h3>Example-4</h3>

				<?php
						class Obj{
								public $x;
						}
						function obj_inc_x($obj){
							$obj->x++;
							return $obj;
						}
						$obj = new Obj();
						$obj->x = 1;


						$obj2 = obj_inc_x($obj);
						obj_inc_x($obj2);

						print $obj->x . ', ' . $obj2->x . "\n";

				?>

				<h4>Example-5</h4>

				<?php
					function scalar_inc_x($x) {
						    $x++;
						    return $x;
						}

						$x = 1;

						$x2 = scalar_inc_x($x);
						scalar_inc_x($x2);
						print $x . ', ' . $x2 . "\n";

				?>

				<h4>Example - 6</h4>

				<?php

					# (3) You have to force pass by reference and return by reference on scalars

				function &scalar_ref_inc_x(&$x) {
				    $x++;
				    return $x;
				}

				$x = 1;

				$x2 =& scalar_ref_inc_x($x);    # Need reference here as well as the function sig
				scalar_ref_inc_x($x2);

				print $x . ', ' . $x2 . "\n";

				# (4) Arrays use pass by value sematics just like scalars

				function array_inc_x($array) {
				    $array{'x'}++;
				    return $array;
				}

				$array = array();
				$array['x'] = 1;

				$array2 = array_inc_x($array);
				array_inc_x($array2);

				print $array['x'] . ', ' . $array2['x'] . "\n";

				# (5) You have to force pass by reference and return by reference on arrays

				function &array_ref_inc_x(&$array) {
				    $array{'x'}++;
				    return $array;
				}

				$array = array();
				$array['x'] = 1;

				$array2 =& array_ref_inc_x($array); # Need reference here as well as the function sig
				array_ref_inc_x($array2);

				print $array['x'] . ', ' . $array2['x'] . "\n";
				?>
					
			<h4>Example-7</h4>
				<?php
					function myfunc1(){
						return('thingy' or die('otherthingy'));
					}
					function myfunc2(){
						return 'thingy' or die('otherthingy');
					}
					function myfunc3(){
						return('thingy') or die('otherthingy');
					}
					function myfunc4(){
						return 'thingy' or 'otherthingy';
					}
					function myfunc5(){
						$x = 'thingy' or 'otherthingy';
						return $x;
					}

						echo myfunc1(). "\n". myfunc2(). "\n". myfunc3(). "\n". myfunc4(). "\n". myfunc5(). "\n";

				?>

			</div>


		  <div class="footersection">
		  	<h2><?php echo "Control Structure  Returnin Function"; ?></h2>
		  </div>
	

	</div>
	
</body>
</html>