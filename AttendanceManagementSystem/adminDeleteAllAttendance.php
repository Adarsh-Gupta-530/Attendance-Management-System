<?php

include './DB/DBconnection.php';
$conn = new mysqli($servername, $username, $password,$db);

/*$sql = "TRUNCATE TABLE attendance2";*/  //unlock this to make it functional

if ($conn->query($sql) === TRUE) {
    
    echo "All Attendance of This semester is Deleted successfully.";
   
} else {
    echo "Error in Deleting Attendance : " . $conn->error;
}

$conn->close();
?>