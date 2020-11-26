<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$id = $_POST['id'];
	$oldphoto = $_POST['oldphoto'];

	$newphoto = $_FILES['newphoto'];

	if ($newphoto['size'] > 0 ) {
		// upload File
		$basepath = 'photo/';
		$fullpath = $basepath.$newphoto['name']; // photo/IMG_4332 (1).jpg
		move_uploaded_file($newphoto['tmp_name'], $fullpath);
	}
	else{
		$fullpath = $oldphoto;
	}

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

	$data_arr = json_decode($jsonData, true);
	$data_arr[$id] = $student;

	$jsonData = json_encode($data_arr, JSON_PRETTY_PRINT);
	file_put_contents('studentlist.json', $jsonData);
	header('location: index.php');


?>