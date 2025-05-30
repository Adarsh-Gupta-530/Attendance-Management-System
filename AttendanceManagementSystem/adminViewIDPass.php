<?php

  include './DB/DBconnection.php';

  $sql = "SELECT user_id, faculty_name, branch, designation, pass FROM faculty WHERE designation = 'Teacher' ORDER BY branch ASC";

  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Faculty ID-Pass</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/hodStudentTable.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white shadow-sm px-4">
    <div class="container-fluid d-flex align-items-center">
      <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
      <h5 class="mb-0 fw-bold">Faculty ID-Pass</h5>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container my-4 flex-grow-1">
    <div class="card shadow-sm">
      <div class="card-body">
        <h3 class="text-center mb-4">Faculty ID & Password List</h3>
        <div class="table-responsive">
          <table class="table table-bordered table-hover text-center">
            <thead class="table-primary sticky-top">
              <tr>
                <th>S. No.</th>
                <th>Faculty ID</th>
                <th>Faculty Name</th>
                <th>Branch</th>
                <th>Designation</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($result->num_rows > 0){
                  $sno = 1;
                  while($row = $result->fetch_assoc()){
              ?>
                  <tr>
                    <td><?php echo $sno++; ?></td>
                    <td><?php echo $row["user_id"]; ?></td>
                    <td><?php echo $row["faculty_name"]; ?></td>
                    <td><?php echo $row["branch"]; ?></td>
                    <td><?php echo $row["designation"]; ?></td>
                    <td><?php echo $row["pass"]; ?></td>
                  </tr>
              <?php
                  }
                } else {
                  echo "<tr><td colspan='5'>No faculty data found.</td></tr>";
                }
                $conn->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
