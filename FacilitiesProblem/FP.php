<?php
	$Room_Number = $_POST['Room_Number'];
	$Vacant_Seat = $_POST['Vacant_Seat'];
	$Damaged_Fan = $_POST['Damaged_Fan'];
	$Damaged_Light = $_POST['Damaged_Light'];
	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Facilities_problem(Room_Number, Vacant_Seat, Damaged_Fan, Damaged_Light) values(?, ?, ?, ?)");
		$stmt->bind_param("iiii", $Room_Number, $Vacant_Seat, $Damaged_Fan, $Damaged_Light);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Inserted successfully...";
		// echo('DispStudent.php')
		include "DispFP.php";
		$stmt->close();
		$conn->close();
	}
?>