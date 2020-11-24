<?php 
	
	echo "<h1> IF statement </h1>";

	$result = 90;

	if ($result > 80) {
		echo "Your Mark is higer.";
	}

	echo "<hr>";

	echo "<h1> IF...ELSE statement </h1>";

	$gender = 'Female';

	if ($gender == 'Female') {
		echo "This is a girl";
	}
	else{
		echo "This is a boy";
	}


	echo "<hr>";
	echo "<h1> IF...ELSEIF...ELSEIF...ELSE </h1>";

	$mark = 100;

	if ($mark >= 80) {
		echo "Excellent";
	}
	elseif ($mark == 80) {
		echo "Very Good";
	}

	elseif ($mark >= 40) {
		echo "Pass";
	}

	elseif ($mark < 40) {
		echo "Fail";
	}

	else{
		echo "Your Mark is : $mark";
	}

	echo "<hr>";
	echo "<h1> SWITCH </h1>";

	switch ($mark) {
		case '$mark >= 80':
			echo "Excellent";
			break;

		case '$mark == 80':
			echo "Very Good";
			break;

		case '$mark >= 40':
			echo "Pass";
			break;

		case '$mark < 40':
			echo "Fail";
			break;
		
		default:
			echo "Your Mark is : $mark";
			break;
	}













?>