<?php
	
	echo "<h1> Array Key Exists </h1>";

	$meals = array(
		"Walnut Bun" => 1,
		"Cashew Nuts and White Mushrooms" => 4.95,
		"Dried Mulberries" => 3.00,
		"Eggplant with Chili Sauce" => 6.50,
		"Shrimp Puffs" => 0
	);

	if (array_key_exists('Shrimp Puffs', $meals)) {
		echo "Yes, we have shrimp puffs";
	}else{
		echo "No, we haven't";
	}

	echo "<br>";

	if (array_key_exists('6.50', $meals)) {
		echo "Yes, we have shrimp puffs";
	}else{
		echo "No, we haven't";
	}

	echo "<hr>";
	echo "<h1> In Array </h1>";

	if (in_array('Shrimp Puffs', $meals)) {
		echo "Yes, we have shrimp puffs";
	}else{
		echo "No we haven't";
	}

	echo "<br>";

	if (in_array(6.50, $meals)) {
		echo "Yes we have";
	}else{
		echo "No, we haven't";
	}

	echo "<h1> Unset </h1>";

	$results = array(50,60,70,80,89);

	foreach ($results as $result) {
		echo $result."<br>";
	}

	echo "<hr>";

	unset($results[2]);

	foreach ($results as $result) {
		echo $result."<br>";
	}



	echo "<h1> Implode </h1>";

	$flowers = array('Rose', 'Jasmin', 'Orchid');

	$string_flowers = implode(' ,',$flowers);

	// => Rose, Jasmin, Orchid
	echo $string_flowers ; 


	echo "<h1> Explode </h1>";



	$pets = 'Dog,Cat,Fish';


	$arr_pets = explode(',', $pets);


	foreach ($arr_pets as $arr_pet) {
		echo $arr_pet."<br>";
	}






?>