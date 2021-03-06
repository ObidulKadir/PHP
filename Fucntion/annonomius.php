<?php
	
	$message = 'hello';

		// No "use"
		$example = function () {
			global $message;
		    var_dump($message);
		};
		$example();

		// Inherit $message
		$example = function () use ($message) {
		    var_dump($message);
		};
		$example();

		// Inherited variable's value is from when the function
		// is defined, not when called
		$message = 'world';
		$example();

		// Reset message
		$message = 'hello';

		// Inherit by-reference
		$example = function () use (&$message) {
		    var_dump($message);
		};
		$example();

		// The changed value in the parent scope
		// is reflected inside the function call
		$message = 'world';
		$example();

		// Closures can also accept regular arguments
		$example = function ($arg) use ($message) {
		    var_dump($arg . ' ' . $message);
		};
		$example("hello");



?>


