<?php
session_start();
if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!=true){
    header("location: studentCheck.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressive Test & Attendance</title>
    <!-- Bootstrap 5 CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: white;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <?php 
    
    include './DB/DBconnection.php';
    $sql = "SELECT * FROM attendance 
    INNER JOIN subject ON subject.sub_id = attendance.sub_id 
    INNER JOIN student ON student.roll_no = attendance.roll_no 
    WHERE student.roll_no = '{$_SESSION["roll_no"]}'";
    
    $result = $conn->query($sql);

    $Sname=$_SESSION["student_name"];
    // echo ($Sname);
    //view attendance
    $sql2 = "SELECT sub_name,COUNT(CASE WHEN attendance = 'P' THEN 1 END) AS present_count,COUNT(attendance_date) 
    AS total_days FROM attendance2 INNER JOIN subject ON subject.sub_id = attendance2.sub_id 
    INNER JOIN student ON student.roll_no = attendance2.roll_no WHERE student.roll_no = '{$_SESSION['roll_no']}' 
    GROUP BY sub_name;";
    
    $result2 = $conn->query($sql2);

    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <img src="./image/logo1.png" alt="Logo" class="logo" style="height: 100px; width: 120px; object-fit: contain;">
            <div class="d-flex justify-content-around align-items-center w-100">
                <span class="fw-bold text-muted"><?php echo $_SESSION['branch']; ?></span>
                <span class="fw-bold text-muted"><?php echo $_SESSION['student_name']; ?></span>
            </div>
            <a href="logOut.php" class="text-decoration-none btn btn-outline-danger">LogOut</a>
        </div>
    </nav>

    
    <!-- Main Content -->
<main class="container mt-5">
    <div class="row g-4">
        <!-- Test Result Box -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">Progressive Test Result</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Subject</th>
                                    <th>PR-1</th>
                                    <th>PR-2</th>
                                    <th>PR-3</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $row["sub_name"]?></td>
                                            <td><?php echo $row["pt1"]?></td>
                                            <td><?php echo $row["pt2"]?></td>
                                            <td><?php echo $row["pt3"]?></td>
                                        </tr>
                                    <?php
                                    }
                                }
                                $conn->close();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Attendance Box -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">Attendance Percentage</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Subjects</th>
                                    <th>Total Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($result2->num_rows > 0) {
                                    while($row2 = $result2->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row2['sub_name']; ?></td>
                                        <td><?php echo round(($row2['present_count']/$row2['total_days'])*100)."%";?></td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='2'>0 results</td></tr>";
                                }
                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
  <footer class="mt-5 py-4 border-top" style="min-height:220px;background-color: #9CA4C4;">
    <div class="container" style="background-color: #9CA4C4;">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0" style="background-color: #9CA4C4;">
          <h5>Trusted By:</h5>
          <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px; width:100px;">
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

    <!-- Bootstrap 5 JS (optional, for interactions like dropdown, modal, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
