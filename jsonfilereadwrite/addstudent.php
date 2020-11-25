<?php 
	
	$name = $_POST['sname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$profile = $_FILES['profile'];

	// upload File
	$basepath = 'photo/';
	$fullpath = $basepath.$profile['name']; // photo/IMG_4332 (1).jpg
	move_uploaded_file($profile['tmp_name'], $fullpath);


	$student = array(
		"name"		=>	$name,
		"email"		=>	$email,
		"gender"	=>	$gender,
		"address"	=>	$address,
		"profile"	=>	$fullpath
	);

	
	// get jsonData From studentlist.json file

	$jsonData = file_get_contents('studentlist.json');

	if (!$jsonData) {
		$jsonData = '[]';
	}


	// convert into array from json

	$data_arr = json_decode($jsonData);

	array_push($data_arr, $student);


	$jsonData = json_encode($data_arr, JSON_PRETTY_PRINT);

	file_put_contents('studentlist.json', $jsonData);

	header('location: index.php');

















?>