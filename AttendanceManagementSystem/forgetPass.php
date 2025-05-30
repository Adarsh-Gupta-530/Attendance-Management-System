<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Forgot Password</title>

     <!-- Bootstrap 5 CSS CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- External Css -->
     <link rel="stylesheet" href="./css/forms.css">
</head>

<body class="bg-light">
  <?php
      include './DB/DBconnection.php';

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userid=$_POST['userid'];
        $password = $_POST['password'];
        $Cpassword = $_POST['Cpassword'];
        
        if($password==$Cpassword){
          $sql = "UPDATE faculty SET pass = '$password' WHERE user_id='$userid'";
          $result = $conn->query($sql);

          if ($result) {
            echo "<p style='color: green;'> password updated successfully!!!!</p>";
          } else {
              echo "<p style='color: red;'>Error in Password Update: " . $conn->error . "</p>";
          }
        }else{
          
            echo '<script type="text/javascript">alert("Password Does not match");</script>';
    
        }
      }
  ?>


     <!-- Navbar -->
     <nav class="navbar navbar-light bg-white shadow-sm px-4">
          <div class="container-fluid d-flex align-items-center">
               <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
               <h5 class="mb-0 fw-bold">Forgot Password</h5>
          </div>
     </nav>

     <!-- Main Section -->
     <main class="container py-5">
          <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                    <div class="card shadow">
                         <div class="card-body">
                              <h4 class="text-center mb-3 fw-bold">Forgot Password</h4>
                              <p class="text-center">Please enter your details to reset your password.</p>

                              <form action="#" method="POST">
                                   <div class="mb-3">
                                        <label for="userid" class="form-label fw-bolder">User ID:</label>
                                        <input type="text" id="userid" name="userid" class="form-control"
                                             placeholder="Enter your User ID" required>
                                   </div>

                                   <div class="mb-3">
                                        <label for="newPassword" class="form-label fw-bolder">New Password:</label>
                                        <input type="password" id="newPassword" name="password" class="form-control"
                                             placeholder="Enter new password" maxlength="8" required>
                                   </div>

                                   <div class="mb-4">
                                        <label for="confirmPassword" class="form-label fw-bolder">Confirm
                                             Password:</label>
                                        <input type="password" id="confirmPassword" name="Cpassword"
                                             class="form-control" placeholder="Confirm new password" maxlength="8" required>
                                   </div>

                                   <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>
                              </form>

                              <p class="text-center mt-3">
                                   <a href="teachersLogin.html" class="text-decoration-none">Back to Login</a>
                              </p>
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

     <!-- Bootstrap JS CDN -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>