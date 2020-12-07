<?php 
	require 'db_connect.php';
	session_start();

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];

	$status = 0;
	$role = 2;

	$sql = "INSERT INTO users (name, phone, email, password, address, status) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $name);
	$stmt->bindParam(':value2', $phone);
	$stmt->bindParam(':value3', $email);
	$stmt->bindParam(':value4', $password);
	$stmt->bindParam(':value5', $address);
	$stmt->bindParam(':value6', $status);
	$stmt->execute();


	// last Userid
	$userid = $conn->lastInsertId();

	$sql = "INSERT INTO model_has_roles (user_id, role_id) VALUES (:value1, :value2)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $userid);
	$stmt->bindParam(':value2', $role);
	$stmt->execute();

	$_SESSION['regsuccess'] = 'Yes, it is not easy, but you did it! Please Sigin Again.';

	header('location:login.php');
?>