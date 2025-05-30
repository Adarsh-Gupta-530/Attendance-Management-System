<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>teachers Get Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="./css/forms.css">
  </head>
  <body>
    <?php 
     include './DB/DBconnection.php';
   
    $sql = "SELECT * FROM assign INNER JOIN subject ON assign.sub_id = subject.sub_id  ORDER BY assign.semester ASC;" ;
    
    $result = $conn->query($sql);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $branch = $_POST['branch'];
      $subject = $_POST['subject'];

        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['branch']=$branch;
        $_SESSION['subject']=$subject;
        $_SESSION['Fid']=$Fid;
        

        header("location: teachersGetAttendance2.php");
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm px-4">
      <div class="container-fluid d-flex align-items-center">
        <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
        <h5 class="mb-0 fw-bold">Teachers Get Attendance</h5>
      </div>
    </nav>

    <!-- Centered Form Card -->
    <div class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 100px);">
      <div class="card shadow p-4" style="width: 100%; max-width: 500px; border-radius: 12px;">
        <h4 class="text-center fw-bold mb-4">Get Attendance</h4>
        <form method="POST" action="teachersGetAttendance.php">
          <div class="mb-3">
            <label for="branch" class="form-label"><b>Branch</b></label>
            <select class="form-select form-select-sm" id="branch" name="branch">
            <option value="" disabled selected hidden>Select Branch</option>
                                             <option value="CSE">Computer Science</option>
                                             <option value="MS">Mine Servey</option>
                                             <option value="MMS">Mining And Mineserving</option>
                                             <option value="ELEC">Electrical</option>
                                             <option value="MECH">Mechanical</option>
                                             <option value="CIVIL">Civil</option>
            </select>
          </div>

          
          <!-- <div class="mb-3">
            <label for="semester" class="form-label"><b>Semester</b></label>
            <select class="form-select form-select-sm" id="branch">
            <option value="" disabled selected hidden>Select semestar</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                             <option value="6">6</option>
                                           
            </select>
          </div> -->


          <div class="mb-3">
            <label for="subject" class="form-label"><b>Subject</b></label>
            <select class="form-select form-select-sm" id="subject" name="subject">
            <option value="" disabled selected hidden>Select subject</option>
                                             
                                            <?php
                                              if($result->num_rows>0){
                                               
                                                while($row=$result->fetch_assoc()){?>
                                                <option value="<?php echo $row["sub_id"]?>"><?php echo $row["sub_name"]?> - <?php echo $row["sub_id"]?> - <?php echo $row["Abranch"]?></option>
                                                <?php
                                                    }
                                                  }
                                                  $conn->close();
                                              ?>
                                   
            </select>
          </div>

          <button type="submit" class="btn btn-primary w-100">Get Attandance</button>
        </form>
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
