
<?php

$arr = array(
			"this"=> 22,
			"shayan" =>222
			);
echo $arr['this'];

?>


<?php

  $array = array(
  	array("mcdz",12,13),
  	array("BMW",12,113),
  	array("lulu",1,24));

  print_r($array);

  echo "<pre>";
  echo $array[1]['holes'];

  echo "</pre>";

  for ($row=0; $row < 3 ; $row++) { 
  	# code...
  	echo "<p>The row no is $row</p>";
     echo "<ul>";

     for ($col=0; $col < 3; $col++) { 
     	# code...
     	  echo "<li>". $array[$row][$col] ."</li>";


     	
     }
     echo "</ul>";
  }




?>

<?php
 
 $names = array("lol","ani","bal","dog");
 sort($names);

 $length = count($names);
 foreach ($names as $value) {
 	# code...
 	echo $value;
 	echo "<br>";
 }
 rsort($names);
 for ($i=0; $i < $length ; $i++) { 
 	# code...
 	echo "$names[$i]";
 	echo "<br>";
 }

 $a = array(15=> 'wone', 21 => 'two', 3 => 'three');
rsort($a);
foreach ($a as  $value) {
	# code...
	echo $value;
 	echo "<br>";

}

?>