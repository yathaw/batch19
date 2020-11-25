<?php 

	echo "<h1> Function </h1>";


	function showName(){
		echo "Ya Thaw Myat Noe";
	}

	showName();


	//--------------------------------------------------


	echo "<h1> Argument </h1>";

	function showfistName($n){
		echo $n;
	}

	$value1 = "Ya Thaw";

	showfistName($value1);

	echo "<br>";

	//--------------------------------------------------

	function showfullName($one, $two){
		echo $one." ".$two;
	}

	$firstName ="Ya Thaw";
	$lastName = "Myat Noe";

	showfullName($firstName, $lastName);
	echo "<br>";

	//--------------------------------------------------

	function sum($v1, $v2){
		$v3 = $v1 + $v2;

		echo "First Number : ".$v1;
		echo "Second Number : ".$v2;

		echo "Result : ".$v3;
	}
	sum(4, 5);


	//--------------------------------------------------

	echo "<h1> Array Argument </h1>";

	$studentOne = array(
		'Myanmar'	=>	60,
		'English'	=>	70,
		'Maths'		=>	99,
		'Chemistry'	=>	90,
		'Physic'	=>	99,
		'Bio'		=>	80,
	);
	$studentOnename = "Ko Ko";

	function showResult($value, $value2){

		$name = $value2;

		$mark1 = $value['Myanmar'];
		$mark2 = $value['English'];
		$mark3 = $value['Maths'];
		$mark4 = $value['Chemistry'];
		$mark5 = $value['Physic'];
		$mark6 = $value['Bio'];

		$total = $mark1 + $mark2 + $mark3 + $mark4 + $mark5 + $mark6;

		echo "<h3> $name </h3>";
		echo "Myanmar => ".$mark1."<br>";
		echo "English => ".$mark2."<br>";
		echo "Maths => ".$mark3."<br>";
		echo "Chemistry => ".$mark4."<br>";
		echo "Physic => ".$mark5."<br>";
		echo "Bio => ".$mark6."<br>";

		echo "Total Marks => ".$total."<br>";
	}


	showResult($studentOne, $studentOnename);

















?>