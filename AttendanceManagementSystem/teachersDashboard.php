<?php
session_start();
if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!=true){
    header("location: teachersLogin.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teacher's Dashboard</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/teachersDashboard.css"> -->
</head>

<body class="d-flex flex-column min-vh-100">

<?php
    include './DB/DBconnection.php';
    $faculty_name=$_SESSION['name'];
    $sql="SELECT * FROM assign INNER JOIN subject ON assign.sub_id = subject.sub_id where assign.faculty_id =  '{$_SESSION['Tid']}';";
    $result = $conn->query($sql);

    $subjects = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subjects[] = $row;
        }
  
      }

      
  ?>
  <!-- Navbar -->
  <nav class="navbar fixed-top shadow-sm">
    <div class="container-fluid">
      <img src="image/logo1.png" alt="Logo" style="max-height: 100px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-primary">Function's</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Mark attendance</a>
              <ul class="dropdown-menu">
              <?php
                 foreach ($subjects as $row):
                  // $s_id= $row['sub_id'];
                 ?>
                  <li><a class="dropdown-item" href="markAttendance.php?sub_id=<?php echo $row['sub_id']?> & Abranch=<?php echo $row['Abranch']; ?>"><?php echo $row['sub_name']; ?> - <?php echo $row['Abranch']; ?></a></li>
              <?php endforeach;?>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Upload & view Progressive Result</a>
              <ul class="dropdown-menu">
              <?php
                 foreach ($subjects as $row): ?>
                  <li><a class="dropdown-item" href="teacherUploadTestResult.php?sub_id=<?php echo $row['sub_id']?>  & Abranch=<?php echo $row['Abranch']; ?>"><?php echo $row['sub_name']; ?> - <?php echo $row['Abranch']; ?></a></li>
              <?php endforeach;?>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">View Details</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="teachersViewStudent.php?B=<?php echo $row['branch']?>">View Student Details</a></li>
                <li><a class="dropdown-item" href="teachersGetAttendance.php?Fid=<?php echo $row['faculty_id']?>">View Student Attendance</a></li>
                <!-- <li><a class="dropdown-item" href="teachersViewProgressiveResult.php?FN=<?php //echo $row['faculty_name']?>">View Progressive Test Result</a></li> -->
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="logOut.php">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center" style="margin-top: 9rem;">
      <div class="col-12 col-sm-10 col-md-9 col-lg-9 col-xl-9 p-4 border shadow rounded" >
        <div class="d-flex justify-content-between mt-3">
          <div><strong>Name: </strong> <?php echo $_SESSION['name']?></div>
          <div><strong>Branch: </strong> <?php echo $_SESSION['branch']?></div>
        </div>
        <h4 class="mt-3 ">Assigned Subject's</h4>
        <table class="table table-bordered mt-4 bg-body-tertiary ">
          
          <thead class="table-light">
            <tr>
              <th>S.No.</th>
              <th>Subject-id</th>
              <th>Subject-name</th>
              <th>Branch</th>
              <th>Semestar</th>
              <th>Period</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sno = 1;
          foreach ($subjects as $row): ?>
          <tr>
              <td><?php echo $sno++; ?></td>
              <td><?php echo $row['sub_id']; ?></td>
              <td><?php echo $row['sub_name']; ?></td>
              <td><?php echo $row['Abranch']; ?></td>
              <td><?php echo $row['semester']; ?></td>
              <td><?php echo $row['Period']; ?></td>
             
          </tr>
          <?php endforeach;?>
            
          </tbody>
        </table>
      </div>
    </div>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>