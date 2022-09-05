<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_equipment') {
	$equipment_name = $_POST['equipment_name'];
	$c = 0;

	$query = "SELECT * FROM equipments WHERE equipment_name LIKE '$equipment_name%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['equipment_name'].'</td>';
				echo '<td>'.$j['quantity'].'</td>';
				echo '<td>'.$j['status'].'</td>';
				echo '<td>'.$j['date_created'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
				echo '<td colspan ="4" style="color:red;">No Result<td>';
		echo '</tr>';
	}

}

$conn = NULL;
?>