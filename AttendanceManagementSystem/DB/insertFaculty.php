<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "AttendanceManagementSystem";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// add Students in CSE 4rt SEM ---->>>> CSE --->>>> C04
$sql = "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE001', 'Ankit Aggraval', 'CSE','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE002', 'P C Soni', 'CSE','HOD','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE003', 'Raghuraj Singh', 'CSE','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE004', 'Aishwarya Prajapati', 'CSE','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE005', 'Neha Aggraval', 'CSE','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CSE006', 'Lakshmi Viswakarma', 'CSE','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('GEN001', 'Sadique Khan ', 'GEN','HOD','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('GEN002', 'Abhinav Bharti Sen', 'GEN','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('GEN003', 'Sandeep Gupta', 'GEN','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('GEN004', 'Deependra Maravi', 'GEN','Teacher','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('ELEC001', 'Adarsh Gupta', 'ELEC','HOD','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('CIVIL001', 'Akhil Soni', 'CIVIL','HOD','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('MECH001', 'Anurag Panday', 'MECH','HOD','12345678');";
$sql .= "INSERT INTO faculty (user_id,faculty_name,branch,designation,pass)
VALUES ('MMS001', 'Akash Shukla', 'MMS','HOD','12345678');";
$sql .= "INSERT INTO student (roll_no,student_name,branch,semester)
VALUES ('MS', 'Rekha malhotra', 'MS','HOD','12345678')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records of faculty Inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

