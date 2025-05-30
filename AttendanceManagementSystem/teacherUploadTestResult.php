<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Test Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<?php
include './DB/DBconnection.php';

$sub_id = $_GET['sub_id'];
$TAbranch=$_GET['Abranch'];
$sql = "SELECT * FROM assign 
        INNER JOIN subject ON assign.sub_id = subject.sub_id 
        WHERE subject.sub_id ='$sub_id' AND assign.Abranch='$TAbranch'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$AB=$row['Abranch'];
$B = $row['branch'];
$S = $row['semester'];
$faculty_id = $row['faculty_id'];

$sql2 = "SELECT * FROM student WHERE branch ='$AB' AND semester='$S'";
$students = $conn->query($sql2);

// Handle POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['marks'] as $roll_no => $tests) {
        $pt1 = $tests['pt1'] ?? null;
        $pt2 = $tests['pt2'] ?? null;
        $pt3 = $tests['pt3'] ?? null;

        $check_sql = "SELECT * FROM attendance WHERE roll_no='$roll_no' AND faculty_id='$faculty_id' AND sub_id='$sub_id'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) > 0) {
            $existing = mysqli_fetch_assoc($check_result);
            $update_parts = [];
            if ($pt1 !== null && $pt1 !== '' && $existing['pt1'] === null) $update_parts[] = "pt1 = '$pt1'";
            if ($pt2 !== null && $pt2 !== '' && $existing['pt2'] === null) $update_parts[] = "pt2 = '$pt2'";
            if ($pt3 !== null && $pt3 !== '' && $existing['pt3'] === null) $update_parts[] = "pt3 = '$pt3'";
            if (!empty($update_parts)) {
                $update_str = implode(', ', $update_parts);
                $update_sql = "UPDATE attendance SET $update_str WHERE roll_no='$roll_no' AND faculty_id='$faculty_id' AND sub_id='$sub_id'";
                mysqli_query($conn, $update_sql);
            }
        } else {
            $insert_sql = "INSERT INTO attendance (roll_no, faculty_id, sub_id, pt1, pt2, pt3)
                           VALUES ('$roll_no', '$faculty_id', '$sub_id', 
                            " . ($pt1 !== '' ? "'$pt1'" : "NULL") . ",
                            " . ($pt2 !== '' ? "'$pt2'" : "NULL") . ",
                            " . ($pt3 !== '' ? "'$pt3'" : "NULL") . ")";
            mysqli_query($conn, $insert_sql);
        }
    }
    echo "<div class='alert alert-success text-center'>Test results submitted successfully.</div>";
}
?>

<nav class="navbar bg-white shadow-sm mb-4">
  <div class="container-fluid d-flex justify-content-between align-items-center px-5">
    <div class="d-flex align-items-center">
      <img src="./image/logo1.png" alt="logo" style="height: 80px;" class="me-3">
    </div>
    <div class="text-end">
      <p class="mb-0 fw-semibold">Teacher: <?php echo $row['faculty_name']?></p>
      <p class="mb-0 fw-semibold">Subject: <?php echo $row['sub_name']?></p>
      <p class="mb-0 fw-semibold">Branch: <?php echo $row['branch']?> | Sem: <?php echo $row['semester']?> | Period: <?php echo $row['Period']?></p>
    </div>
  </div>
</nav>

<div class="container bg-white rounded shadow p-4 mb-5">
  <form method="POST">
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-light">
          <tr>
            <th>S. No.</th>
            <th>Roll No.</th>
            <th>Student Name</th>
            <th>Test 1</th>
            <th>Test 2</th>
            <th>Test 3</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if ($students->num_rows > 0) {
            $sno = 1;
            while ($stu = $students->fetch_assoc()) {
                $roll = $stu['roll_no'];
                $existing = mysqli_query($conn, "SELECT * FROM attendance WHERE roll_no='$roll' AND faculty_id='$faculty_id' AND sub_id='$sub_id'");
                $data = $existing->num_rows > 0 ? $existing->fetch_assoc() : null;

                echo "<tr>
                        <td>$sno</td>
                        <td>{$stu['roll_no']}</td>
                        <td>{$stu['student_name']}</td>";

                for ($i = 1; $i <= 3; $i++) {
                    $val = $data["pt$i"] ?? '';
                    if ($val !== null && $val !== '') {
                        echo "<td><input type='number' class='form-control text-center' value='$val' readonly></td>";
                    } else {
                        echo "<td><input type='number'  name='marks[{$roll}][pt$i]' class='form-control text-center' min='0' max='10' style='max-width:100px; margin:auto;'></td>";
                    }
                }

                echo "</tr>";
                $sno++;
            }
        }
        ?>
        </tbody>
      </table>
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary">Upload</button>
    </div>
  </form>
</div>

 <!-- Footer -->
 <footer class="mt-auto py-4 border-top" style="min-height:220px;background-color: #9CA4C4;">
    <div class="container" style="background-color: #9CA4C4;">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5>Trusted By:</h5>
          <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px;">
          <p>Rajeev Gandhi Proudogiki Vishwavidyalaya Bhopal</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5 class="text-center">Members:</h5>
          <ul class="list-unstyled text-center">
            <li>Adarsh Gupta</li>
            <li>Akhil Soni</li>
            <li>Akash Shukla</li>
            <li>Anurag Panday</li>
            <li>Sanyukta Soni</li>
          </ul>
        </div>
        <div class="col-md-4" style="background-color: #9CA4C4;">
          <h5 class="text-center">&copy; Govt. Polytechnic College Shahdol</h5>
          <p class="text-muted text-center">All rights reserved.</p>
          <h5 class="text-center">Branch</h5>
          <p class="text-muted text-center">Computer Science & Engineering</p>
        </div>
      </div>
    </div>
  </footer>
      </body>
      </html>
