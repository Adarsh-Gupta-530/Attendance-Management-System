 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "SELECT DISTINCT roll_no, sname, sub, 
               COUNT(CASE WHEN attand = 'P' THEN 1 END) AS present_count, 
               COUNT(a_date) AS total_days 
        FROM student 
        GROUP BY roll_no, sub 
        ORDER BY roll_no ASC";
$result = $conn->query($sql);

$sql2 = "SELECT DISTINCT roll_no, sname FROM student ORDER BY roll_no ASC"; 
$result2 = $conn->query($sql2);

// Store attendance data from $result into an associative array
$attendanceData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $attendanceData[$row['roll_no']][] = $row;
    }
}

// Now iterate through the student list
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        echo "<strong>".$row2['roll_no']." - ".$row2['sname']."</strong><br>";

        if (isset($attendanceData[$row2['roll_no']])) {
            foreach ($attendanceData[$row2['roll_no']] as $row) {
                echo $row['sub']."  "; 
                // echo $row['present_count']."/".$row['total_days']."<br>";
                echo round(($row['present_count'] / $row['total_days']) * 100)."%<br>";
            }
        } else {
            echo "No attendance data.<br>";
        }

        echo "<hr>"; // separates students
    }
} else {
    echo "0 results";
}

?>
