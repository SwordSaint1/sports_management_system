<?php
	include 'login.php';

	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$q = "SELECT * FROM user_accounts WHERE email = '$username'";
		$stmt = $conn->prepare($q);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			foreach($stmt->fetchALL() as $i){
				$name = $i['Name'];
				$role = $i['role'];
				$id_number = $i['id_number'];
			}
		}else{
			session_unset();
			session_destroy();
			header('location: ../../index.php');
		}
	}else{
		session_unset();
		session_destroy();
		header('location: ../../index.php');
	}
	

?>