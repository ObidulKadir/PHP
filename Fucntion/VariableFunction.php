
<h3>Variable exmaple -1</h3>

<?php
	
	class foo{
		function Variable(){
			$name = 'bar';
			$this->$name();//this is called bar function because we set a value $name = bar

		}
		function bar(){
			echo "the name is a bar";
		}
	}

	$foo = new foo();
	$funcname = "Variable";
	$foo->$funcname();  // $funcname() call the Variable function

?>

<h3>Example -2</h3>
<?php
		class baby{
			static function newbaby(){
				echo  "<br>";
				echo "newbaby";
				
			}
			function baz(){
				echo  "<br>";
				echo "baz";
			}
		}
		$func = array("baby","newbaby");
		$func();

		$func = array(new baby, "baz");
		$func(); // prints "baz"
		$func = "baby::newbaby";
		$func();
?>