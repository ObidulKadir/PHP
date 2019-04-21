<?php

	for ($i=0; $i < 10; $i++) { 
		# code...
		goto bal;
	}

	bal:
	echo "$i";

?>
	<?php
      $array= $arrayName = array('kadir'  , "shayan" );
      foreach ($array as $key => $value) {
      	# code...
      	  goto bald;
      }

      bald:
      echo "$value";
      goto foreach;

?>