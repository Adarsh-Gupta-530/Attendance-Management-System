<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HOD Login</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

     <!--External Css -->
     <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
<?php
        
        include './DB/DBconnection.php';
        $errorMsg=false;
        $errorDMsg=false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $id=$_POST['id'];
            $branch=$_POST['branch'];
            $password=$_POST['password'];
    
            $sql="select * from faculty where user_id='$id' AND pass='$password' AND branch='$branch' ";
            $result = mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num==1){
                $row = mysqli_fetch_assoc($result);//fetch row
                if($row['designation']!="HOD"){     //check is important 
                    $errorDMsg=true;
                }else{
                    if($row['branch']=="GEN"){

                         session_start();
                         $_SESSION['loggedin']=true;
                         $_SESSION['branch']=$branch;
                         $_SESSION['name'] = $row['faculty_name'];
                         header("location: hodGenBranchDashboard.php");
                    }else{
                         session_start();
                         $_SESSION['loggedin']=true;
                         $_SESSION['branch']=$branch;
                         $_SESSION['name'] = $row['faculty_name'];
                         header("location: hodDashboard.php");
                    }
                    
                }
            }else{
                $errorMsg=true;
                // echo "Invalid Credential";
           }
        }
    
    
    ?>

     <!-- Navbar -->
     <nav class="navbar navbar-light bg-white shadow-sm px-4">
          <div class="container-fluid d-flex align-items-center">
               <img src="./image/logo1.png" alt="Logo" class="me-3" style="height: 80px;">
               <h5 class="mb-0 fw-bold">HOD Login</h5>
          </div>
     </nav>

     <!-- Main -->

     <main class="container my-5">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
                    <div class="card p-4 shadow-sm">
                         <h5 class="text-center mb-4 fw-bold">HOD Login</h5>
                        <?php
                            if( $errorMsg==true){
                                echo "<p style='color: red;'>Invalid Credential</p>";
                            }
                            
                        ?>
                        <?php
                            if( $errorDMsg==true){
                                echo "<p style='color: red;'>Wrong Designation!!</p>";
                            }
                            
                        ?>

                         <form action="" method="POST">
                              <div class="mb-3">
                                   <label for="name" class=" form-label fw-bold">HOD ID</label>
                                   <input type="text" class="form-control" id="id" name="id"
                                        placeholder="Enter your Faculty ID" required>
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
                                   <label for="password" class="form-label fw-bold">Password</label>
                                   <input type="password" class="form-control " id="password" name="password"
                                        placeholder="Enter your password" maxlength="8" required>
                              </div>

                              <div class="d-grid mb-2">
                                   <button type="submit" class="btn btn-primary" name="submit">Login</button>
                              </div>

                              <div class="text-center">
                                   <a href="forgetPass.php" class="text-decoration-none">Forgot Password?</a>
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