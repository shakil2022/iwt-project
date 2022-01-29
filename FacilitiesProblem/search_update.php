<?php
// error_reporting(0);
// $conn = mysqli_connect("localhost","root","","student");
include 'connection.php';
// if(count($_POST)>0) {
$Room_Number = $_POST['Room_Number'];
$result = mysqli_query($conn, "SELECT Room_Number,sum(Damaged_Fan_Un+Damaged_Light_Un) as total_uv, sum(Damaged_Fan_Pro+Damaged_Light_Pro) as total_pro,sum(Damaged_Fan_Sol+Damaged_Light_Sol) as total_sol,date FROM facility_problem where Room_Number='$Room_Number' ");
// foreach ($conn->query($result) as $row){
//     $total_uv1=$row1['Damaged_Fan_Un'] + $row1['Damaged_Light_Un'];
//     $total_pro1=$row1['Damaged_Fan_Pro'] + $row1['Damaged_Light_Pro'];
//     $total_sol1=$row1['Damaged_Fan_Sol'] + $row1['Damaged_Light_Sol'];
//     $result="UPDATE facility_problem SET total_uv='$total_uv1' ";
//     $result="UPDATE facility_problem SET total_pro='$total_pro1' ";
//     $result="UPDATE facility_problem SET total_sol='$total_sol1' ";
//         mysqli_query($conn,$result);
// }




// $sql = "SELECT * from exam_model "; 

// foreach ($conn->query($sql) as $row){  
//     $total= $row['English'] + $row['Math']; 

//     $sql="UPDATE exam_model SET total='$total' ";
//     mysqli_query($conn,$sql);
//}
?>
<!DOCTYPE html>
<html>

<head>
  <title> Retrive data</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    .button {
      background-color: #4CAF50;
      /* Green */
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
  <table class="center table table-striped">
    <tr>
      <td>Room Number</td>
      <td> Total Unsolved</td>
      <td> Total Processing</td>
      <!-- <td> Damaged Fan Processing</td> -->
      <td> Total Solved</td>
      <!-- <td> Damaged Light Unsolved</td> -->
      <!-- <td> Damaged Light Processing</td> -->
      <!-- <td> Damaged Light Solved</td> -->
      <td> Last Modified Date</td>
    </tr>
    <?php
    while ($row1 = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $row1["Room_Number"]; ?></td>
        <td><?php echo $row1["total_uv"]; ?></td>
        <td><?php echo $row1["total_pro"]; ?></td>
        <td><?php echo $row1["total_sol"]; ?></td>
        <!-- <td><?php echo $row1["date"]; ?></td> -->
      </tr>
    <?php
    }
    ?>
  </table>
  <center>
    <button class="button"> <a href="DispFP.php" style="text-decoration: none;">Back</a> </button>
  </center>

</body>

</html>