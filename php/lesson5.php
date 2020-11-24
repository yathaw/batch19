<?php 

	echo "<h1> Indexed / Numberic Array </h1>";

	$fruits = array('apple', 'orange', 'pineapple', 'grape');

	// $fruits = ['apple', 'orange', 'pineapple', 'grape'];

	echo $fruits[1];

	echo "<br> <hr>";

	echo "<h1> Associative Array </h1>";

	$students = array(
		'A001'	=>	'Mg Mg',
		'A002'	=>	'Ko Ko',
		'A003'	=>	'Aye Aye',
		'A004'	=>	'Hla Hla'
	);

	echo $students['A003'];

	echo "<br> <hr>";

	echo "<h1> Multidimensional Array </h1>";


	$meals = array(
		'breakfast'	=>	['Coffee', 'Bread'],
		'lunch'		=>	['Fried Rice', 'Dumpling'],
		'dinner'	=>	['Fried Chicken', 'Coca cola']

	);



	echo $meals['breakfast'][0];















?>