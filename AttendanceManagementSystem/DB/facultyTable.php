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
$sql = "CREATE TABLE faculty (
s_no INT AUTO_INCREMENT PRIMARY KEY,
user_id VARCHAR(50) UNIQUE,
faculty_name VARCHAR(30),
branch VARCHAR(10),
designation VARCHAR(50),
pass VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table faculty created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
