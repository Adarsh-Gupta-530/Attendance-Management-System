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
$sql = "CREATE TABLE assign (
sub_id INT,
faculty_id VARCHAR(50),
faculty_name VARCHAR(50),
branch VARCHAR(10),
semester INT(1),
period INT(1)

FOREIGN KEY (sub_id) REFERENCES subject(sub_id),
FOREIGN KEY (faculty_id) REFERENCES faculty(user_id),
PRIMARY KEY (sub_id,faculty_id,branch)

)";

if (mysqli_query($conn, $sql)) {
  echo "Table assign created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
