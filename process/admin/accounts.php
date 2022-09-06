<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_account') {
	$id_number = $_POST['id_number'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$user_type = $_POST['user_type'];
	$c = 0;

	$query = "SELECT * FROM user_accounts WHERE id_number LIKE '$id_number%' AND Name LIKE '$name%' AND course LIKE '$course%' AND role LIKE '$user_type%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_acc" onclick="get_account_details(&quot;'.$j['id'].'~!~'.$j['Name'].'~!~'.$j['course'].'~!~'.$j['yr_section'].'~!~'.$j['id_number'].'~!~'.$j['email'].'~!~'.$j['password'].'~!~'.$j['role'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['id_number'].'</td>';
				echo '<td>'.$j['Name'].'</td>';
				echo '<td>'.$j['course'].'</td>';
				echo '<td>'.$j['yr_section'].'</td>';
				echo '<td>'.$j['email'].'</td>';
				echo '<td>'.strtoupper($j['role']).'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
				echo '<td colspan ="4" style="color:red;">No Result<td>';
		echo '</tr>';
	}

}

if ($method == 'update_account') {
	$id = $_POST['id'];
	$Name = $_POST['Name'];
	$course = $_POST['course'];
	$yr_section = $_POST['yr_section'];
	$id_number = $_POST['id_number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$check = "SELECT id FROM user_accounts WHERE id_number = '$id_number' AND Name = '$Name' AND course = '$course' AND yr_section = '$yr_section' AND email = '$email' AND password = '$password' AND role = '$role'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
		$stmt = NULL;
	}else{
		$stmt = NULL;

		$query = "UPDATE user_accounts SET id_number = '$id_number', Name = '$Name', course = '$course', yr_section = '$yr_section', email = '$email', password = '$password', role = '$role' WHERE id = '$id'";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}
$conn = NULL;
?>