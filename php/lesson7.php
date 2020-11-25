<?php 
	
	echo "<h1> Sort </h1>";

	$fruits = array('orange', 'pineapple', 'lemon', 'apple');

	sort($fruits);

	foreach ($fruits as $fruit) {
		echo $fruit."<br>";
	}

	echo "<h1> Rsort </h1>";

	rsort($fruits);

	foreach ($fruits as $fruit) {
		echo $fruit."<br>";
	}


	$students = array(
		'A'	=>	'Mg Mg',
		'B'	=>	'Ko Ko',
		'C'	=>	'Aye Aye',
		'D'	=>	'Hla Hla'
	);

	echo "<h1> Asort </h1>";

	asort($students);

	foreach ($students as $student) {
		echo $student."<br>";
	}


	echo "<h1> ksort </h1>";

	ksort($students);

	foreach ($students as $student) {
		echo $student."<br>";
	}


	echo "<h1> Arsort </h1>";

	arsort($students);

	foreach ($students as $student) {
		echo $student."<br>";
	}

	echo "<h1> Krsort </h1>";

	krsort($students);

	foreach ($students as $student) {
		echo $student."<br>";
	}










?>