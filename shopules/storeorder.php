<?php 
	session_start();
	require('db_connect.php');

	$carts = $_POST['carts'];
	$note = $_POST['note'];
	$total = $_POST['total'];

	date_default_timezone_set("Asia/Rangoon");
	$orderdate = date('Y-m-d');
	$voucherno = strtotime(date('h:i:s'));
	$status = "Order";
	$userid = $_SESSION['login_user']['id'];

	$sql = 'INSERT INTO orders (orderdate, voucherno, total, note, status, user_id) VALUES (:value1, :value2, :value3, :value4,  :value5,  :value6)';
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $orderdate);
	$stmt->bindParam(':value2', $voucherno);
	$stmt->bindParam(':value3', $total);
	$stmt->bindParam(':value4', $note);
	$stmt->bindParam(':value5', $status);
	$stmt->bindParam(':value6', $userid);
	$stmt->execute();

	// last Userid
	$orderid = $conn->lastInsertId();

	foreach ($carts as $cart) {
		$id = $cart['id'];
		$qty = $cart['qty'];

		$sql = "INSERT INTO item_order(qty, item_id,  order_id) VALUES(:value1, :value2, :value3)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':value1', $qty);
		$stmt->bindParam(':value2', $id);
		$stmt->bindParam(':value3', $orderid);
		$stmt->execute();

	}
?>