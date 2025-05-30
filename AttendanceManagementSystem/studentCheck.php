<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Check Attendance</title>

     <!-- Bootstrap CSS -->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- External Css-->
     <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
<?php
    include './DB/DBconnection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $roll_no=$_POST['roll_no'];
        $name=$_POST['name'];

        $sql="select * from student where roll_no='$roll_no'";
        $result = mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($num == 1){
            echo "Login Successfully";

             // Fetch the user data from the result
            $row = mysqli_fetch_assoc($result);
            $branch = $row['branch'];

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['student_name']=$name;
            $_SESSION['branch']=$branch;
            $_SESSION['roll_no']=$roll_no;
            header("location: studentDashboard.php");

        }else{
            echo "Invalid Credential";
        }
    }
    
    ?>

    <nav class="navbar navbar-light bg-white shadow-sm px-4">
        <div class="container-fluid d-flex align-items-center">
            <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
            <h5 class="mb-0 fw-bold">Check Attendance</h5>
        </div>
    </nav>

     <!-- Main -->
     <main class="container my-5  ">
          <div class="row justify-content-center   ">
               <div class="col-md-6 col-lg-4 ">

                    <div class="card p-4 shadow-sm ">
                         <P class="text-center mb-4 fw-bold">Check Attendance</p>

                         <form action="" method="POST">
                              <div class="mb-3">
                                   <label for="name" class="form-label fw-bold">Student Name</label>
                                   <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Student Name" required>
                              </div>

                              <div class="mb-3">
                                   <label for="roll_no" class="form-label fw-bold">Roll no.</label>
                                   <input type="text" class="form-control" id="roll_no" name="roll_no"
                                        placeholder="Enter your roll_no" pattern="^\d{5}[A-Z]\d{5}$" required>
                              </div>

                              <div class="d-grid mb-2">
                                   <button type="submit" class="btn btn-primary" name="submit">Check</button>
                              </div>

                         </form>

                    </div>
               </div>
          </div>
     </main>

<!-- Footer -->
<footer class=" mt-auto py-4 border-top">
     <div class="container">
          <div class="row text-center text-md-start">
               <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Trusted By:</h5>
                    <img src="./image/RGPVLOGO.jpeg" alt="RGPV Logo" class="img-fluid mb-2" style="max-height: 80px;">
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


     <!-- Bootstrap JS Bundle -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>