<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT sub,COUNT(CASE WHEN attand = 'P' THEN 1 END) AS present_count,COUNT(a_date) AS total_days FROM student WHERE sname = 'Akanksha' GROUP BY sub;"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<!-- //in query call by using roll_no -->
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>Student Name - Akanksha </h2>
<h2>Roll NO - CS101</h2>
<h2>Semester - 4th</h2>
<h2>Branch-CSE</h2>
<!-- make all 4 heading dynamically by using id. -->


<table>
  <tr>
    <th>Subject</th>
    <th>Present/Total classes helded</th>
    <th>Percantage</th>
 </tr>

  <?php
      while($row = $result->fetch_assoc()) {
     
       ?>
  <tr>
    <td><?php echo $row['sub']; ?></td>
    <td><?php echo $row['present_count'];?>  / <?php echo $row['total_days'];?></td>
    <td><?php echo round(($row['present_count']/$row['total_days'])*100)."%";?></td>
  </tr>
  <?php

     } 
 }
      else { echo "0 results";}?> 
</table>
<!-- using where branch="cse" and sem="4th" -->
</body>
</html>




