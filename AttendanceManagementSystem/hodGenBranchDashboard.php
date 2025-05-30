<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: hodLogin.php");
    exit;
}
include './DB/DBconnection.php';

$sql = "SELECT student.roll_no, student.student_name, student.semester, student.branch, attendance2.attendance, attendance2.attendance_date
    FROM attendance2 
    INNER JOIN subject ON subject.sub_id = attendance2.sub_id 
    INNER JOIN student ON student.roll_no = attendance2.roll_no 
    WHERE attendance2.attendance_date = CURRENT_DATE AND (student.semester = '1' OR student.semester = '2') 
    GROUP BY student.roll_no, student.student_name, student.semester, student.branch, attendance2.attendance, attendance2.attendance_date;";

$attMMS = $attCSE = $attELEC = $attMS = $attCIVIL = $attMECH = 0;
$totalAttMMS = $totalAttCSE = $totalAttELEC = $totalAttMS = $totalAttCIVIL = $totalAttMECH = 0;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        switch ($row['branch']) {
            case 'MMS':
                $totalAttMMS++;
                if ($row['attendance'] == 'P') $attMMS++;
                break;
            case 'CSE':
                $totalAttCSE++;
                if ($row['attendance'] == 'P') $attCSE++;
                break;
            case 'ELEC':
                $totalAttELEC++;
                if ($row['attendance'] == 'P') $attELEC++;
                break;
            case 'MS':
                $totalAttMS++;
                if ($row['attendance'] == 'P') $attMS++;
                break;
            case 'CIVIL':
                $totalAttCIVIL++;
                if ($row['attendance'] == 'P') $attCIVIL++;
                break;
            case 'MECH':
                $totalAttMECH++;
                if ($row['attendance'] == 'P') $attMECH++;
                break;
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOD's Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar fixed-top shadow-sm bg-white">
    <div class="container-fluid">
      <img src="image/logo1.png" alt="Logo" style="height: 90px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-primary">Function's</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link" href="hodFacultyTable.php">View Faculty</a></li>
            <li class="nav-item"><a class="nav-link" href="hodStudentTable.php">View Students</a></li>
            <li class="nav-item"><a class="nav-link" href="viewProgressiveTestResult.php?B=<?php echo $_SESSION['branch'] ?>">View Progressive Test Results</a></li>
            <li class="nav-item"><a class="nav-link" href="hodGetAttendance.php?B=<?php echo $_SESSION['branch'] ?>">View Students Attendance</a></li>
            <li class="nav-item"><a class="nav-link" href="logOut.php">LogOut</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container my-5" style="padding-top: 120px;">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="d-flex justify-content-between mt-3">
          <div><strong>Name:</strong> <?php echo $_SESSION['name'] ?> (HOD)</div>
          <div><strong>Branch:</strong> <?php echo $_SESSION['branch'] ?></div>
        </div>

        <h3 class="text-center my-4 text-primary">Branch-wise Attendance</h3>

        <!-- Attendance Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
          $branches = [
              'CSE' => $attCSE / max($totalAttCSE, 1),
              'MMS' => $attMMS / max($totalAttMMS, 1),
              'ELEC' => $attELEC / max($totalAttELEC, 1),
              'MS' => $attMS / max($totalAttMS, 1),
              'CIVIL' => $attCIVIL / max($totalAttCIVIL, 1),
              'MECH' => $attMECH / max($totalAttMECH, 1),
          ];

          foreach ($branches as $branchName => $attendanceRatio) {
              $percentage = ($attendanceRatio > 0) ? round($attendanceRatio * 100) . "%" : "N/A";
              echo '
              <div class="col">
                <div class="card shadow-sm border-primary">
                  <div class="card-header bg-primary text-white text-center">' . $branchName . '</div>
                  <div class="card-body">
                    <h5 class="card-title text-center">Daily Attendance</h5>
                    <div class="bg-light p-3 rounded text-center border">
                      <h4 class="text-primary mb-0">' . $percentage . '</h4>
                      <small class="text-muted">Updated Today</small>
                    </div>
                  </div>
                </div>
              </div>';
          }
          ?>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-auto py-4 border-top" style="background-color: #9CA4C4;">
    <div class="container">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0">
          <h5>Trusted By:</h5>
          <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px;">
          <p>Rajeev Gandhi Proudogiki Vishwavidyalaya, Bhopal</p>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
