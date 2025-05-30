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
$sql = "CREATE TABLE student (
s_no INT UNIQUE AUTO_INCREMENT,
roll_no VARCHAR(12) PRIMARY KEY,
student_name VARCHAR(30) NOT NULL,
branch VARCHAR(10) NOT NULL,
semester INT(1)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table student created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
