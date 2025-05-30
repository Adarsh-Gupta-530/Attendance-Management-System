<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AttendanceManagementSystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE subject (
s_no INT UNIQUE AUTO_INCREMENT,
sub_id INT PRIMARY KEY,
sub_name VARCHAR(30) NOT NULL,
faculty_name VARCHAR(30) NOT NULL,
branch VARCHAR(10) NOT NULL,
semester INT(1)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table subject created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>



<!-- 

SELECT sub_id,sub_name,branch,semester,period
FROM subject
INNER JOIN attendance2
ON subject.sub_id = attendance2.sub_id; -->