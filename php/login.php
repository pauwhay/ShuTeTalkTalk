<?php
	include 'data.php';

	$email = '';
	$password = '';

	if(isset($_POST['email'], $_POST['password'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];
	}

	$db = new PDO($dsn, $db_user, $db_pass);
	$sql = "SELECT COUNT(*) FROM `users` WHERE `email` = 123 AND `password` = 123";
	$result = $db->prepare($sql);
	$result->execute();
	$row = $result->fetchColumn();
	
	if ($row == 1) {

		
	}
?>