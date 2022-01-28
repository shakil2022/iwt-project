<?php
// error_reporting(0);
// $conn = mysqli_connect("localhost","root","","student");
include 'connection.php';
// if(count($_POST)>0) {
$Room_Number = $_POST['Room_Number'];
$result = mysqli_query($conn,"SELECT * FROM facilities_problem where Room_Number='$Room_Number' ");
//}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  margin-top: 60px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

</style>
</head>
<body>
<table  class="center table table-striped" >
<tr>
<td>Room Number</td>
<td>Vacent Seat</td>
<td>Damaged fan</td>
<td> Damaged Light</td>
</tr>
<?php
while($row1 = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row1["Room_Number"]; ?></td>
<td><?php echo $row1["Vacant_Seat"]; ?></td>
<td><?php echo $row1["Damaged_Fan"]; ?></td>
<td><?php echo $row1["Damaged_Light"]; ?></td>
</tr>
<?php
}
?>
</table>
<center>
<button class="button" > <a href="DispFP.php" style="text-decoration: none;">Back</a> </button>
</center>

</body>
</html>