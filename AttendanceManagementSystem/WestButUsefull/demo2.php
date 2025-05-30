
<?php
session_start();
if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!=true){
    header("location: hodLogin.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOD's Dashboard</title>

  <!-- Bootstrap CSS -->
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
            <li class="nav-item"><a class="nav-link" href="viewProgressiveTestResult.php?B=<?php echo $_SESSION['branch']?>">View Progressive Test Results</a></li>
            <li class="nav-item"><a class="nav-link" href="hodGetAttendance.php?B=<?php echo $_SESSION['branch']?>">View Students Attendance</a></li>
            <li class="nav-item"><a class="nav-link" href="logOut.php">LogOut</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container my-5  " style="padding-top: 120px;">
    <div class="row justify-content-center">
      <div class="col-lg-10">
              <!-- User Info -->
      <div class="d-flex justify-content-between mt-3">
          <div><strong>Name: </strong> <?php echo $_SESSION['name']?>(HOD)</div>
          <div><strong>Branch: </strong> <?php echo $_SESSION['branch']?></div>
        </div>

        <h3 class="text-center mb-4 text-primary">Semester-wise Attendance</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">

          <!-- Semester 1 -->
          <div class="col">
            <div class="card shadow-sm border-primary">
              <div class="card-header bg-primary text-white text-center">
                Semester 1
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Daily Attendance</h5>
                <div class="bg-light p-3 rounded text-center border">
                  <h4 class="text-primary mb-0">85%</h4>
                  <small class="text-muted">Updated Today</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Semester 2 -->
          <div class="col">
            <div class="card shadow-sm border-primary">
              <div class="card-header bg-primary text-white text-center">
                Semester 2
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Daily Attendance</h5>
                <div class="bg-light p-3 rounded text-center border">
                  <h4 class="text-primary mb-0">78%</h4>
                  <small class="text-muted">Updated Today</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Semester 3 -->
          <div class="col">
            <div class="card shadow-sm border-primary">
              <div class="card-header bg-primary text-white text-center">
                Semester 3
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Daily Attendance</h5>
                <div class="bg-light p-3 rounded text-center border">
                  <h4 class="text-primary mb-0">62%</h4>
                  <small class="text-muted">Updated Today</small>
                </div>
              </div>
            </div>
          </div>

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
