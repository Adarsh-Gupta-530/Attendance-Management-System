<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";



// CREATE TABLE Student(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// roll_no varchar(30) NOT NULL,
// sname VARCHAR(30) NOT NULL,
// sub VARCHAR(50) NOT NULL,
// attand VARCHAR(10) NOT NULL,
// a_date date)

  
//entries date wise(1/3/25)

$sql = "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'A','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'P', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-03-01');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'P', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'P', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-03-01');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'A', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'P', '2025-03-01');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'A','2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'A', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'A', '2025-03-01');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'A', '2025-03-01');";


//entries date wise(2/3/25)
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'A','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'P','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'A', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-03-02');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'A','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'P','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'P', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'A', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-03-02');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'A','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'P', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'A', '2025-03-02');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'P','2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'P', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'P', '2025-03-02');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'A', '2025-03-02');";


//entries date wise(3/3/25)
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'P','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'A','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'P', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-03-03');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'A','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'P','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'A', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'P', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-03-03');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'P','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'A', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'P', '2025-03-03');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'A','2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'P', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'A', '2025-03-03');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'P', '2025-03-03');";


//entries date wise(5/4/25)
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'P','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'A','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'P', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-04-05');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'P','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'A','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'A', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'P', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-04-05');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'A','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'A', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'P', '2025-04-05');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'A','2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'A', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'P', '2025-04-05');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'P', '2025-04-05');";


//entries date wise(6/5/25)
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'P','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'A','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'P', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-05-06');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'P','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'A','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'A', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'P', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-05-06');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'A','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'A', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'P', '2025-05-06');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'A','2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'A', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'P', '2025-05-06');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'P', '2025-05-06');";


//entries date wise(7/5/25)
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'OS', 'P','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'OS', 'A','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'OS', 'A', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'OS', 'P', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'OS', 'P', '2025-05-07');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'TOC', 'P','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'TOC', 'A','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'TOC', 'A', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'TOC', 'P', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'TOC', 'P', '2025-05-07');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'CD', 'P','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'CD', 'A','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'CD', 'A', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'CD', 'P', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'CD', 'P', '2025-05-07');";

$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS101', 'Akanksha', 'DM', 'P','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS102', 'Alpi Singh', 'DM', 'A','2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS103', 'Aditi Sahu', 'DM', 'A', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS104', 'Deepali Kurothe', 'DM', 'P', '2025-05-07');";
$sql .= "INSERT INTO student (roll_no ,sname, sub, attand,  a_date)
VALUES ('CS105', 'Dhananjay Kumar', 'DM', 'P', '2025-05-07')";





// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>

<!-- SELECT * FROM student WHERE roll_no = 'CS101' AND a_date >= '2025-03-01' AND a_date <= '2025-05-31'; -->






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

// $sql = "SELECT * FROM student";
$sql = "SELECT * FROM student WHERE roll_no = 'CS103' AND sub= 'OS' AND a_date >= '2025-03-01' AND a_date <= '2025-05-31' ORDER BY a_date DESC ";
// $sql = "SELECT * FROM student WHERE roll_no = 'CS101' AND sub='TOC' AND a_date >= '2025-03-01' AND a_date <= '2025-05-31' ORDER BY a_date DESC";
// $sql = "SELECT * FROM student WHERE roll_no = 'CS101' AND sub='CD' AND a_date >= '2025-03-01' AND a_date <= '2025-05-31' ORDER BY a_date DESC";
// $sql = "SELECT * FROM student WHERE roll_no = 'CS101' AND sub='DM' AND a_date >= '2025-03-01' AND a_date <= '2025-05-31' ORDER BY a_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
   ?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DB Record</h2>
   <p>The .table-striped class adds zebra-stripes to a table:</p>             -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Rollno</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Date</th>
        <th>attendance</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $row["roll_no"]?></td>
          <td><?php echo $row["sname"]?></td>
          <td><?php echo $row["sub"]?></td>
          <td><?php echo $row["a_date"]?></td>
          <td><?php echo $row["attand"]?></td>
        </tr> 
        <?php

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
                   
    </tbody>
  </table>
</div>

</body>
</html>
 



































 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT DISTINCT roll_no,sname, sub, COUNT(CASE WHEN attand = 'P' THEN 1 END) AS present_count, COUNT(a_date) AS total_days FROM student GROUP BY roll_no,sub order by (roll_no) ASC";
$result = $conn->query($sql);

$sql2 = "SELECT DISTINCT roll_no,sname from student ORDER BY (roll_no) ASC"; 
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) 
{
  while($row2 = $result2->fetch_assoc()) 
  {
    echo $row2['roll_no']; 
    echo $row2['sname']; 
    if ($result->num_rows > 0) 
    {  
      echo $result->num_rows;
      while($row = $result->fetch_assoc()) 
      {
        echo "compare";
        if($row['roll_no'] ==$row2['roll_no'] )
        {
          echo $row['sub']."</br>"; 
          echo $row['present_count']."/".$row['total_days']."</br>";
          echo round(($row['present_count']/$row['total_days'])*100)."%"."</br>";
        }
        else{echo "no";}
      }
      echo "end or inner loop and test $result->num_rows"; 
    }
    echo "increment next name";
  }
} else { echo "0 results";} 

?> 