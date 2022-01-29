<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE facilities_problem set Room_Number='" . $_POST['Room_Number'] . "', Vacant_Seat='" . $_POST['Vacant_Seat'] . "', Damaged_Fan='" . $_POST['Damaged_Fan'] . "', Damaged_Light='" . $_POST['Damaged_Light'] . "' WHERE Room_Number='" . $_POST['Room_Number'] . "'");
//  $message = "Record Modified Successfully";
include "DispFP.php";
//require "DispStudent.php";

}
$result = mysqli_query($conn,"SELECT * FROM facilities_problem WHERE Room_Number='" . $_GET['Room_Number'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Facilities Problem</title>
<style>
  body{
    background-image: url(../images/sea2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .sec{
    margin: 50px 500px;
   align-items: center;
   line-height: 30px;
  }
</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<!-- <div style="padding-bottom:5px;">
 <a href="retrieve.php">Employee List</a> 
</div> -->
<section class="sec">
Room Number: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Room_Number" class="txtField" value="<?php echo $row['Room_Number']; ?>">
<input style="width: 50%; height:30x; " type="number" name="Room_Number"  value="<?php echo $row['Room_Number']; ?>">
<br>
Vacant Seat: <br>
<input style="width: 50%; height:30px; " type="number" name="Vacant_Seat" class="txtField" value="<?php echo $row['Vacant_Seat']; ?>">
<br>
Damaged Fan:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Fan" class="txtField" value="<?php echo $row['Damaged_Fan']; ?>">
<br>
Damaged Light:<br>
<input style="width: 50%; height:30px; " type="number" name="Damaged_Light" class="txtField" value="<?php echo $row['Damaged_Light']; ?>">
<br>
<!-- <br>
Floor_Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Floor_Number" class="txtField" value="<?php echo $row['Floor_Number']; ?>">
<br> -->
<!-- <button>submit</button> -->
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>