<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mark Attendance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
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
  $result2 = $conn->query($sql2);

  $currentDate = date('Y-m-d');
  $twoDaysAgo = date('Y-m-d', strtotime('-2 days'));

  // Handle POST request for attendance submission
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $attendance_date = $_POST['attendance_date'];

      if ($attendance_date < $twoDaysAgo || $attendance_date > $currentDate) {
          echo "<div class='alert alert-danger text-center'>Attendance can only be marked for today or the last 2 days.</div>";
      } else {
          $period = $row['Period'];
          foreach ($_POST['attendance'] as $roll_no => $status) {
              $status = $status === 'present' ? 'P' : 'A';
              $check_sql = "SELECT * FROM attendance2 
                            WHERE roll_no='$roll_no' AND faculty_id='$faculty_id' 
                            AND sub_id='$sub_id' AND attendance_date='$attendance_date' 
                            AND period='$period'";
              $check_result = $conn->query($check_sql);
              if ($check_result->num_rows == 0) {
                  $insert = "INSERT INTO attendance2 
                            (roll_no, faculty_id, sub_id, attendance, attendance_date, period) 
                            VALUES ('$roll_no', '$faculty_id', '$sub_id', '$status', '$attendance_date', '$period')";
                  $conn->query($insert);
              }
          }
          echo "<div class='alert alert-success text-center'>Attendance submitted successfully.</div>";
      }
  }
?>

<!-- Navbar -->
<nav class="navbar bg-white shadow-sm mb-4">
  <div class="container-fluid d-flex justify-content-between align-items-center px-5">
    <div class="d-flex align-items-center">
      <img src="./image/logo1.png" alt="logo" style="height: 80px;" class="me-3">
    </div>
    <div class="text-end">
      <p class="mb-0 fw-semibold">Teacher: <?php echo $row['faculty_name']?></p>
      <p class="mb-0 fw-semibold">Subject: <?php echo $row['sub_name']?></p>
      <p class="mb-0 fw-semibold">Branch: <?php echo $row['Abranch']?> | Sem: <?php echo $row['semester']?> | Period: <?php echo $row['Period']?></p>
    </div>
  </div>
</nav>

<!-- Attendance Form -->
<div class="container bg-white rounded shadow p-4 mb-5">
  <form method="POST" action="">
    <div class="mb-4 ms-3">
      <label for="dateInput" class="form-label fw-semibold">Date:</label>
      <input type="date" class="form-control w-auto" id="dateInput" name="attendance_date" required>
    </div>

    <!-- Responsive Table -->
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-light">
          <tr>
            <th>S. No.</th>
            <th>Roll No.</th>
            <th>Student Name</th>
            <th>Attendance</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if ($result2->num_rows > 0) {
              $sno = 1;
              while ($row2 = $result2->fetch_assoc()) {
                  $roll_no = $row2['roll_no'];
                  echo "<tr>
                          <td>$sno</td>
                          <td>$roll_no</td>
                          <td>{$row2['student_name']}</td>
                          <td>
                              <div class='form-check form-check-inline'>
                                  <input class='form-check-input' type='radio' name='attendance[$roll_no]' value='present' required>
                                  <label class='form-check-label'>Present</label>
                              </div>
                              <div class='form-check form-check-inline'>
                                  <input class='form-check-input' type='radio' name='attendance[$roll_no]' value='absent'>
                                  <label class='form-check-label'>Absent</label>
                              </div>
                          </td>
                        </tr>";
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
      <div class="col-md-4 mb-4 mb-md-0">
        <h5>Trusted By:</h5>
        <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style=" max-height: 80px; max-width: 80px;">
        <p>Rajeev Gandhi Proudogiki Vishwavidyalaya Bhopal</p>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <h5 class="text-center">Members:</h5>
        <ul class="list-unstyled text-center">
          <li>Adarsh Gupta</li>
          <li>Akhil Soni</li>
          <li>Akash Shukla</li>
          <li>Anurag Panday</li>
          <li>Sanyukta Soni</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5 class="text-center">&copy; Govt. Polytechnic College Shahdol</h5>
        <p class="text-muted text-center">All rights reserved.</p>
        <h5 class="text-center">Branch</h5>
        <p class="text-muted text-center">Computer Science & Engineering</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
