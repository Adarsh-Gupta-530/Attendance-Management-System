<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Faculty Signup</title>

     <!-- Bootstrap 5 CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- External Css-->
     <link rel="stylesheet" href="./css/forms.css">

</head>

<body class="bg-light">
<?php
        
    include './DB/DBconnection.php';
        // Function to generate a unique userId
    function generateUserId($conn, $branch) {
        $sql = "SELECT user_id FROM faculty WHERE branch='$branch' ORDER BY s_no DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $lastId = $row['user_id'];
            $numPart = intval(substr($lastId, strlen($branch))) + 1;
        } else {
            $numPart = 1;
        }

        return $branch . str_pad($numPart, 3, '0', STR_PAD_LEFT);
    }

    $showIdPass=false;
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $branch = strtoupper($_POST['branch']);
        $userId = generateUserId($conn, $branch);
        $designation = $_POST['designation'];
        $password = $_POST['password'];
        $Cpassword = $_POST['Cpassword'];

        $checkQuery = "SELECT * FROM faculty WHERE user_id='$userId'";
        $checkResult = $conn->query($checkQuery);
        
        while ($checkResult->num_rows > 0) {
            preg_match('/\d+/', $userId, $matches);
            $newNumber = isset($matches[0]) ? intval($matches[0]) + 1 : 1;
            $userId = $branch . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
            $checkQuery = "SELECT * FROM faculty WHERE user_id='$userId'";
            $checkResult = $conn->query($checkQuery);
        }

        if($password==$Cpassword)
        {   
            $sql = "INSERT INTO faculty (user_id, faculty_name, branch, designation, pass) VALUES ('$userId','$name', '$branch','$designation','$password' )";

            if ($conn->query($sql) === TRUE) {
               $showIdPass=true;
            } else {
                echo "<p style='color: red;'>Error inserting data: " . $conn->error . "</p>";
            }

        }else
        {
            echo '<script type="text/javascript">alert("Password Does not match");</script>';

        }
        // Insert into database (with debugging)
    
    }

    $conn->close();
?>

     <!-- Navbar -->

     <nav class="navbar navbar-light bg-white shadow-sm px-4">
          <div class="container-fluid d-flex align-items-center">
               <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
               <h5 class="mb-0 fw-bold">Faculty SignUp </h5>
            
          </div>
     </nav>

     <!-- Main Content -->
     <main class="container py-5">
          <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                    <div class="card shadow">
                         <div class="card-body">
                              <h6 class="text-center mb-4 fw-bold">Faculty SignUp</h6>
                                <?php
                                    if( $showIdPass==true){
                                        echo "<p style='color: green;'>Signup successful! Your Faculty ID is: <strong>$userId</strong> , Name: <strong>$name</strong> and password : <strong>$password</strong></p>";
                                    } 
                                ?>

                              <form action="#" method="post">
                                   <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Name:</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                             placeholder="Enter Your Name" required>
                                   </div>

                                   <div class="mb-3">
                                        <label for="branch" class="form-label fw-bold">Branch:</label>
                                        <select name="branch" id="branch" class="form-select" required>
                                             <option value="" disabled selected hidden>Select Branch</option>
                                             <option value="CSE">Computer Science</option>
                                             <option value="MS">Mine Servey</option>
                                             <option value="MMS">Mining And Mineserving</option>
                                             <option value="ELEC">Electrical</option>
                                             <option value="MECH">Mechanical</option>
                                             <option value="CIVIL">Civil</option>
                                             <option value="GEN">General</option>
                                        </select>
                                </div>

                                   <div class="mb-3">
                                        <label for="designation" class="form-label fw-bold">Designation:</label>
                                        <select name="designation" id="designation" class="form-select" required>
                                             <option value="" disabled selected hidden>Select Designation</option>
                                             <option value="HOD">HOD</option>
                                             <option value="Teacher">Teacher</option>
                                        </select>
                                   </div>

                                   <div class="mb-3">
                                        <label for="password" class="form-label fw-bold">Password:</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                             placeholder="Enter your password" maxlength="8" required>
                                   </div>

                                   <div class="mb-4">
                                        <label for="confirmPassword" class="form-labe fw-bold">Confirm Password:</label>
                                        <input type="password" id="confirmPassword" name="Cpassword"
                                             class="form-control" placeholder="Confirm your password" maxlength="8"
                                             required>
                                   </div>

                                   <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                   </div>
                              </form>
                         </div>
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



     <!-- Bootstrap Bundle JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>