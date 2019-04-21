<?php 
	/**
	 * 
	 */
	class foo
	{
		
		var $bar = 'i am bar a';
		var $arr = array('i am A','i am B','I am c');
		var $r = 'I am d.';

		var $foo = "i am foo";
	}
	$foo = new foo();
	$bar = 'bar';
	$baz = array('foo','bar','baz','quax');
	echo $foo->$bar ."<br>";
	

	echo "<pre>";
	print_r($baz);
	echo "</pre>";

	echo $foo->{$baz[0]}."<br>";

	$start = 'b';
	$end = 'ar';

echo $foo->{$start . $end};

	$arr = 'bar';
	echo $foo->{$arr[2]};


 ?>