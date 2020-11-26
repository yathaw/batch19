<?php 
	
	$id = $_POST['sid'];

	$studentlist = file_get_contents('studentlist.json');

	$studentlist_array = json_decode($studentlist, true);



	// data delete
	unset($studentlist_array[$id]);

	// var_dump($studentlist_array);die();
	

	$mydata = json_encode($studentlist_array, JSON_PRETTY_PRINT);


	file_put_contents("studentlist.json", $mydata);

?>