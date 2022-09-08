<?php 
include '../conn.php';
$method = $_POST['method'];

if ($method == 'fetch_disapproved') {
	$facility_name = $_POST['facility_name'];
	$id_num = $_POST['id_num'];
	$c = 0;

	$query = "SELECT * FROM borrow_list WHERE facility LIKE '$facility_name%' AND id_number = '$id_num' AND status = 'Dis-Approved'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['borrowing_code'].'</td>';
				echo '<td>'.$j['borrowed_date'].'</td>';
				echo '<td>'.$j['time_from'].'</td>';
				echo '<td>'.$j['time_to'].'</td>';
				echo '<td>'.$j['facility'].'</td>';
				echo '<td>'.$j['purpose'].'</td>';
				echo '<td>'.$j['returned_date'].'</td>';
				echo '<td>'.$j['returned_time'].'</td>';
				echo '<td>'.$j['status'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="10" style="color:red;">No Result!<td>';
			echo '</tr>';
	}
}

$conn = NULL;
?>