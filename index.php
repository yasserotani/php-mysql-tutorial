<?php 

	// ----------------------indexed arrays--------------------------------

	$peopleOne = ['shaun', 'crystal', 'ryu'];
	//echo $peopleOne[1];

	$peopleTwo = array('ken', 'chun-li');
	//echo $peopleTwo[1];

	$ages = [20, 30, 40, 50];

	//print_r($ages);

	$ages[1] = 25;
	//print_r($ages);

	//--------------------------------------
	// adding a new value
	$ages[] = 10;
	array_push($ages, 70);
	//print_r($ages);

	//echo array_pop($ages);
	//print_r($ages);

	// count the elements in the array
	//echo count($ages);

	//metge two array together
	$peopleThree = array_merge($peopleOne, $peopleTwo);
	//print_r($peopleThree);

	// -----------------associative array (key & value pairs)---------------------
	// [key1 => value1, key2 => value2 , ...];

	$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
	// we could add whatever key and value type 
	//echo $ninjasOne['mario'];
	//print_r($ninjasOne);

	$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
	//print_r($ninjasTwo);


	// adding a 
	$ninjasTwo['toad'] = 'pink';

	//echo count($ninjasTwo);

	$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
	print_r($ninjasThree);



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p></p>

</body>
</html>