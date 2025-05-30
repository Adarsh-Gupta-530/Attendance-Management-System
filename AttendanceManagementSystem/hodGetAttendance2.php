<?php
session_start();
if($_SESSION['loggedin']!=true){
    header("location: hodGetAttendance.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="./css/forms.css">
  </head>
  <body>
  <?php 
      include './DB/DBconnection.php';
      $branch=$_SESSION['branch'];
      $subject_id=$_SESSION['subject'];
    //   $semester=$_SESSION['semester'];

    if($branch=='GEN'){
        $sql="SELECT student.roll_no , student_name, COUNT(CASE WHEN attendance = 'P' THEN 1 END) AS present_count,COUNT(attendance_date) AS total_days 
      FROM attendance2 INNER JOIN subject ON subject.sub_id = attendance2.sub_id INNER JOIN student ON student.roll_no = attendance2.roll_no WHERE 
      subject.sub_id='$subject_id' GROUP BY student.roll_no, student_name;";

    }else{

      $sql="SELECT student.roll_no , student_name, COUNT(CASE WHEN attendance = 'P' THEN 1 END) AS present_count,COUNT(attendance_date) AS total_days 
      FROM attendance2 INNER JOIN subject ON subject.sub_id = attendance2.sub_id INNER JOIN student ON student.roll_no = attendance2.roll_no WHERE 
      student.branch = '$branch' AND subject.sub_id='$subject_id' GROUP BY student.roll_no, student_name;";
    }

      $result = $conn->query($sql);
  ?>
  <nav class="navbar bg-white shadow-sm mb-4">
        <div class="container-fluid d-flex justify-content-between align-items-center px-5">
          <div class="d-flex align-items-center">
            <img src="./image/logo1.png" alt="logo" style="height: 80px;" class="me-3">
          </div>
          <div class="text-end">
            <p class="mb-0 fw-semibold">Student's Attendance</p>
          </div>
        </div>
    </nav>
  <div class="mx-4"> 
        <div class="table-responsive">
          <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
              <tr>
                <th>S. No.</th>
                <th >Roll No.</th>
                <th >Student Name</th>
                <th>Total Attendance</th>
              </tr>
            </thead>
            <tbody>

                          <?php

                            if ($result->num_rows > 0) {
                            $sno=1;
                                while($row = $result->fetch_assoc()) {
                                
                                ?>
                            <tr>
                                <td><?php echo $sno; $sno++;?></td>
                                <td><?php echo $row["roll_no"]?></td>
                                <td><?php echo $row["student_name"]?></td>
                                <td><?php echo round(($row['present_count']/$row['total_days'])*100)."%";?></td>
                            </tr>
                            <?php

                                } 
                            }
                                else { echo "0 results";}
                            ?> 
            
          </table>
        </div>
      </div>


    <footer class=" mt-auto py-4 border-top">
          <div class="container">
               <div class="row text-center text-md-start">
                    <div class="col-md-4 mb-4 mb-md-0">
                         <h5>Trusted By:</h5>
                         <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2"
                              style="max-height: 80px;">
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
                         <h5 class="text-center">Branch </h5>
                         <p class="text-muted text-center">Computer Science & Engineering</p>
                    </div>
               </div>
          </div>
     </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
