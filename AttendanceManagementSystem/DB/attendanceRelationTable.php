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
$sql = "CREATE TABLE attendance (
roll_no VARCHAR(12),
faculty_id VARCHAR(50),
sub_id INT,
pt1 INT(2),
pt2 INT(2),
pt3 INT(2),
FOREIGN KEY (roll_no) REFERENCES student(roll_no),
FOREIGN KEY (faculty_id) REFERENCES faculty(user_id),
FOREIGN KEY (sub_id) REFERENCES subject(sub_id),
PRIMARY KEY (roll_no,faculty_id,sub_id)

)";

if (mysqli_query($conn, $sql)) {
  echo "Table attendance created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
